@extends('layouts.index')

@section('contents')
<div class="row">
    <div class="col-md-12">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data USER</li>
            </ol>
            <h6 class="slim-pagetitle">PENGATURAN USER</h6>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
    <a href="{{route('users.create')}}" class="btn btn-outline-primary btn-block mg-b-10">TAMBAH USER</a>
  </div>
</div>

<div class="section-wrapper mg-t-20">
    <div class="table-responsive">
        <table class="table table-hover mg-b-0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                    <div class="dropdown">
                            <a class="btn btn-outline-info btn-icon rounded-circle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div><i class="fa fa-bars"></i></div></a>
                            <div class="dropdown-menu" >                       
                            <a class="dropdown-item" href="{{route('users.edit', $item->id)}}">Edit</a>
                              <form action="{{route('users.destroy', $item->id)}}" method="POST">
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