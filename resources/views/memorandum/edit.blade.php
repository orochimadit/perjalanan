@extends('layouts.index')

@section('contents')
<div class="row">
 <div class="col-md-12">
  <div class="slim-pageheader">
      <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('memorandum.index')}}">Memorandum</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ubah</li>
      </ol>
      <h6 class="slim-pagetitle">UBAH MEMORANDUM</h6>
  </div>
 </div>
 <div class="col-md-12">
  <div class="section-wrapper">
     
     <form action="{{route('memorandum.update', $memorandum->id)}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
         <div class="form-layout">
             @csrf
             @method('PUT')
             <div class="row form-group col-md-4">
                 <label class="form-control-label">Nomor : <span class="tx-danger">*</span></label>
                 <input class="form-control" type="text" name="nomor" placeholder="Nomor" value="{{$memorandum->nomor}}" autofocus required>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            
         </div>
         <div class="form-layout-footer">
             <button type="submit" class="btn btn-primary bd-0" onclick="return confirm('Simpan data ?')">Simpan</button>
         </div>
     </form>
 </div>
 
 </div>
</div>


@endsection