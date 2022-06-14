@extends('layouts.index')

@section('contents')
<div class="row">
 <div class="col-md-12">
  <div class="slim-pageheader">
      <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('memorandum.index')}}">Memorandum</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Memorandum</li>
      </ol>
      <h6 class="slim-pagetitle">TAMBAH MEMORANDUM</h6>
  </div>
 </div>
 <div class="col-md-12">
  <div class="section-wrapper">
     
     <form action="{{route('roles.store')}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
         <div class="form-layout">
             @csrf
            <div class="row form-group col-md-4">
                <label class="form-control-label">Name : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{old('name')}}" placeholder="Name" autofocus required>
                @error('name')
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

@push('script')
<script>
	  $(function(){
		'use strict'
		// Datepicker
		$('.fc-datepicker').datepicker({
		  showOtherMonths: true,
		  selectOtherMonths: true,
          dateFormat: 'dd-mm-yy'
		});
		// Select2 by showing the search
        $('.select2-show-search').select2({
          minimumResultsForSearch: ''
        });
		
		
   
  
	  });
	</script>
@endpush
