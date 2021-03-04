@extends('admin.master')

@section('css')
  <style media="screen">
  /* #qrcode {
    width:160px;
    height:160px;
    margin-top:15px;
  } */
  </style>
@endsection

@section('main-content')
  @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{Session::get('success')}}
    </div>
  @endif
<!-- Page Heading -->
<div class="row">
  <div class="col">
    <h1 class="h3 mb-4 text-gray-800">Detail Anggota {{$user->name}}</h1>
  </div>
</div>

<div class="row justify-content-center">
  <div class="col-lg-12">
    <div class="card shadow mb-4">
      <div class="card-body">

      </div>
    </div>
  </div>
</div>

@endsection

@section('js')
@endsection
