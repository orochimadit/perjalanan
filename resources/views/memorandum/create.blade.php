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
     
     <form action="{{route('memorandum.store')}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
         <div class="form-layout">
             @csrf
            <div class="row form-group col-md-4">
                <label class="form-control-label">Nomor : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="number" placeholder="Nomor" autofocus required>
                @error('number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror 
            </div>
            <div class="row form-group col-md-4">
                <label class="form-control-label">Kepada : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="to" placeholder="Kepada" autofocus required>
                @error('to')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror 
            </div>
            <div class="row form-group col-md-4">
                <label class="form-control-label">Dari : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="from" placeholder="Dari" autofocus required>
                @error('from')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror 
            </div>
            <div class="row form-group col-md-4">
					<div class="form-group">
						<label class="form-control-label">Tahun Masuk SD/ Sederajat: </label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="icon ion-calendar tx-16 lh-0 op-6"></i>
								</div>
							</div>
			  				<input  name="es_year_entry" type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
						</div>
					</div>
			  	</div>
            <div class="row form-group col-md-4">
                <label class="form-control-label">Waktu : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="time" placeholder="Waktu" autofocus required>
                @error('time')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror 
            </div>
            <div class="row form-group col-md-4">
                <label class="form-control-label">Judul : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="title" placeholder="Judul" autofocus required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror 
            </div>
            <div class="row form-group col-md-4">
                <label class="form-control-label">Subjek : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="subject" placeholder="Subjek" autofocus required>
                @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror 
            </div>
            <div class="row form-group col-md-4">
                <label class="form-control-label">Deskripsi : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="description" placeholder="Deskripsi" autofocus required>
                @error('description')
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
