@extends('layouts.blackand.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Pengguna</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active">Data Pengguna</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Detail Pengguna</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <h1>Pengguna Details</h1>
                    
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                                    <p class="card-text"><strong>Alamat:</strong> {{ $user->alamat }}</p>
                                    <p class="card-text"><strong>NIK:</strong> {{ $user->nik }}</p>
                                    <p class="card-text"><strong>Revo:</strong> {{ $user->revo }}</p>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </section>



    @endsection
