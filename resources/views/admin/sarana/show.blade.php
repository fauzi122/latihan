@extends('layouts.blackand.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Sarana Prasarana</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active">Sarana Prasarana</li>
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
                    <div class="container">
                        <h1>Detail Sarana Prasarana</h1>
                
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $sarana->nama_moda }}</h5>
                                <p class="card-text"><strong>Jenis:</strong> {{ $sarana->jenis }}</p>
                                <p class="card-text"><strong>Nomor:</strong> {{ $sarana->nomor }}</p>
                                <p class="card-text"><strong>Deskripsi:</strong> {{ $sarana->deskripsi }}</p>
                                <p class="card-text"><strong>Lokasi:</strong> {{ $sarana->lokasi }}</p>
                                <p class="card-text"><strong>Kapasitas:</strong> {{ $sarana->kapasitas }}</p>
                                <p class="card-text"><strong>Satuan:</strong> {{ $sarana->satuan }}</p>
                                <p class="card-text"><strong>Tanggal Pembelian:</strong> {{ $sarana->tanggal_pembelian }}</p>
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
