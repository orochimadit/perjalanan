<?php

namespace App\Http\Controllers;

use App\Models\Memorandum;
use App\Http\Requests\StoreMemorandumRequest;
use App\Http\Requests\UpdateMemorandumRequest;

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
        Memorandum::create([
            'number' => $request->number,
            'to'    => $request->to,
            'from'  => $request->from,
            'time'  => $request->time,
            'title' => $request->title,
            'subject'   => $request->subject,
            'description'   => $request->description
        ]);
        
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
}
