@extends('layouts.blackand.app')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-8">
                <h1 class="m-0">Selamat Datang di <b> Halaman Admin </b></h1>
            </div><!-- /.col -->
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-7">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $sarana }}</h3>

                        <p>Jumlah Data Sarana Prasarana</p>

                    </div>
                    <div class="icon">
                        <i class="fa fa-file"></i>
                    </div>
                    {{--  <a href="#" class="small-box-footer">Surat Online<i class="fas fa-arrow-circle-right"></i></a>  --}}
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-7">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><sup style="font-size: 20px"></sup>{{ $buku }}</h3>

                        <p>Jumlah Data Buku</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-7">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $user }}</h3>

                        <p>Jumlah Data User</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                </div>
            </div>
            <!-- ./col -->
            {{--  <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Pengajuan Akun</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    
                </div>
            </div>  --}}
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->

</section>

@endsection
