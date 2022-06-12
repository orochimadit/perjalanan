@extends('layouts.index')

@section('contents')
<div class="row">
    <div class="col-md-12">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Memorandum</li>
            </ol>
            <h6 class="slim-pagetitle">PENGATURAN MEMORANDUM</h6>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
    <a href="{{route('memorandum.create')}}" class="btn btn-outline-primary btn-block mg-b-10">TAMBAH MEMORANDUM</a>
  </div>
</div>

<div class="section-wrapper mg-t-20">
    <div class="table-responsive">
        <table class="table table-hover mg-b-0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nomor</th>
                    <th>Kepada</th>
                    <th>Dari</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($memorandum as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->number}}</td>
                    <td>{{$item->to}}</td>
                    <td>{{$item->from}}</td>
                    <td><button type="button" class="btn btn-success">Approve</button></td>
                    <td>
                    <div class="dropdown">
                            <a class="btn btn-outline-info btn-icon rounded-circle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div><i class="fa fa-bars"></i></div></a>
                            <div class="dropdown-menu" >                       
                            <a class="dropdown-item" href="{{route('memorandum.edit', $item->id)}}">Edit</a>
                              <form action="{{route('memorandum.destroy', $item->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="dropdown-item" onclick="return confirm('Hapus Data?')">Hapus</button>                 
                              </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection