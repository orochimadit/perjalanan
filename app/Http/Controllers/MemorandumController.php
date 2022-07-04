<?php

namespace App\Http\Controllers;

use App\Models\Memorandum;
use App\Models\User;
use App\Http\Requests\StoreMemorandumRequest;
use App\Http\Requests\UpdateMemorandumRequest;
use App\Notifications\MemorandumNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class MemorandumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memorandum = Memorandum::all();
        return view('memorandum.index',compact('memorandum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('memorandum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMemorandumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemorandumRequest $request)
    {
        // menyimpan data file yang diupload ke variabel $file
		if($request->file('file')){
            $file = $request->file('file');
 
            $nama_file = time()."_".$file->getClientOriginalName();
     
                      // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
        }else{
            $file = "";
        }
       
        Memorandum::create([
            'number' => $request->number,
            'user_id'   =>Auth::user()->id,
            'to'    => $request->to,
            'from'  => $request->from,
            'time'  => $request->time,
            'title' => $request->title,
            'file'  =>  $file,
            'subject'   => $request->subject,
            'description'   => $request->description
        ]);
        $subscribers = User::all(); //Retrieving all subscribers
 
        foreach($subscribers as $subscriber){
            Notification::route('mail' , $subscriber->email) //Sending mail to subscriber
                          ->notify(new MemorandumNotification()); //With new post
        }
       return redirect()->route('memorandum.index')->with('alert-success', 'Memorandum Berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Memorandum  $memorandum
     * @return \Illuminate\Http\Response
     */
    public function show(Memorandum $memorandum)
    {
        //
        //  dd($memorandum);
        return view('memorandum.show',compact('memorandum'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Memorandum  $memorandum
     * @return \Illuminate\Http\Response
     */
    public function edit(Memorandum $memorandum)
    {
        
        return view('memorandum.edit', compact('memorandum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemorandumRequest  $request
     * @param  \App\Models\Memorandum  $memorandum
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMemorandumRequest $request, Memorandum $memorandum)
    {
        $memorandum->update([
            'number' => $request->number,
            'to'    => $request->to,
            'from'  => $request->from,
            'time'  => $request->time,
            'title' => $request->title,
            'description'   => $request->description
        ]);
        return redirect()->route('memorandum.index')->with('alert-success', 'Memorandum berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Memorandum  $memorandum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Memorandum $memorandum)
    {
        try {
            $memorandum->delete();
        } catch (\Throwable $th) {
            return back()->with('alert-danger',$th->getMessage());
        }
        return redirect()->route('memorandum.index')->with('alert-success', 'Memorandum berhasil dihapus');
    }

    public function approve(Memorandum $memorandum)
    {
        //dd($memorandum);
        try {
        $memorandum->update([
            'approve' => 'yes',
        ]);
    } catch (\Throwable $th) {
        return back()->with('alert-danger',$th->getMessage());
    }
        return redirect()->route('memorandum.index')->with('alert-success', 'Memorandum berhasil diubah.');
    }
    public function changeStatus(Request $request)
    {
        $mem = Memorandum::find($request->id);
        $mem->approve = $request->status;
        $mem->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
