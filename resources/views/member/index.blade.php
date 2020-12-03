@extends('member.master')



@section('css')

  <style media="screen">

    #banner {

      display: block;

      margin-left: auto;

      margin-right: auto;

      /* width: 50%; */

      max-height: 100px;

    }

  </style>

@endsection



@section('main-content')



    <!-- Page Heading -->

    <marquee><h1 class="h3 mb-4 text-gray-800">Selamat Datang Di Perpustakaan Digital SMAN 1 Kota Depok</h1></marquee>

    <div class="row mb-3">

      <img src="{{asset('img/logosmansa.png')}}" id="banner" class="center" alt="" height="500px;">

    </div>

    @if (session('success'))

    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">

        {{ session('success') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">

            <span aria-hidden="true">&times;</span>

        </button>

    </div>

    @endif



    @if (session('status'))

        <div class="alert alert-success border-left-success" role="alert">

            {{ session('status') }}

        </div>

    @endif



    <div class="row">



        <!-- Earnings (Monthly) Card Example -->

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card border-left-primary shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Peminjaman</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>

                        </div>

                        <div class="col-auto">

                            <i class="fas fa-calendar fa-2x text-gray-300"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Earnings (Monthly) Card Example -->

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card border-left-success shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Peminjaman Bulan ini</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">450</div>

                        </div>

                        <div class="col-auto">

                            <i class="fas fa-user fa-2x text-gray-300"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Earnings (Monthly) Card Example -->

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card border-left-info shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Buku Belum Dikembalikan</div>

                            <div class="row no-gutters align-items-center">

                                <div class="col-auto">

                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">47</div>

                                </div>

                            </div>

                        </div>

                        <div class="col-auto">

                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Users -->

        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card border-left-warning shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Buku Dikembalikan</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">23</div>

                        </div>

                        <div class="col-auto">

                            <i class="fas fa-users fa-2x text-gray-300"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
