@extends('layouts.index')

@section('contents')
<div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Memorandum Page</li>
          </ol>
          <h6 class="slim-pagetitle">Memorandum</h6>
        </div><!-- slim-pageheader -->

        <div class="row row-sm">
         

          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
           


            <div class="card pd-25 mg-t-20">
              <div class="slim-card-title">Memorandum </div>

              <div class="media-list mg-t-25">
                <div class="media">
                  <div><i class="icon ion-link tx-24 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-4">
                    <h6 class="tx-14 tx-gray-700">Websites</h6>
                    <a href="" class="d-block">http://themepixels.me</a>
                    <a href="" class="d-block">http://themeforest.net</a>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-ios-telephone-outline tx-24 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-4">
                    <h6 class="tx-14 tx-gray-700">Nomor Surat</h6>
                    <span class="d-block"> {{$memorandum->number}}</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-ios-email-outline tx-24 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-4">
                    <h6 class="tx-14 tx-gray-700">Kepada</h6>
                    <span class="d-block">{{$memorandum->user->email}}</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-social-instagram tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">Kepada</h6>
                    <a href="#" class="d-block">{{$memorandum->to}}</a>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-social-instagram tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">Dari</h6>
                    <a href="#" class="d-block">{{$memorandum->from}}</a>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-social-instagram tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">Waktu</h6>
                    <a href="#" class="d-block">{{$memorandum->time}}</a>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-social-instagram tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">Judul</h6>
                    <a href="#" class="d-block">{{$memorandum->title}}</a>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-social-instagram tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">Subjek</h6>
                    <a href="#" class="d-block">{{$memorandum->subject}}</a>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media mg-t-25">
                  <div><i class="icon ion-social-instagram tx-18 lh-0"></i></div>
                  <div class="media-body mg-l-15 mg-t-2">
                    <h6 class="tx-14 tx-gray-700">File</h6>
                    <a href="#" class="d-block">{{$memorandum->file}}</a>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- media-list -->
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->
@endsection