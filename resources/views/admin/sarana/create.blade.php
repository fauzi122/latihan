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
                          <h3 class="card-title">Form Tambah Sarana Prasarana</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('prasarana.store') }}" method="POST">
                            @csrf
                
                            <div class="form-group">
                                <label for="nama_moda">Nama Moda:</label>
                                <input type="text" name="nama_moda" id="nama_moda" class="form-control" required>
                            </div>
                
                            <div class="form-group">
                                <label for="jenis">Jenis:</label>
                                <select name="jenis" id="jenis" class="form-control" required>
                                    <option value="Tangki">Tangki</option>
                                    <option value="Pipa">Pipa</option>
                                    <option value="Barge">Barge</option>
                                </select>
                            </div>
                
                            <div class="form-group">
                                <label for="nomor">Nomor:</label>
                                <input type="text" name="nomor" id="nomor" class="form-control" required>
                            </div>
                
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required></textarea>
                            </div>
                
                            <div class="form-group">
                                <label for="lokasi">Lokasi:</label>
                                <input type="text" name="lokasi" id="lokasi" class="form-control" required>
                            </div>
                
                            <div class="form-group">
                                <label for="kapasitas">Kapasitas:</label>
                                <input type="text" name="kapasitas" id="kapasitas" class="form-control" required>
                            </div>
                
                            <div class="form-group">
                                <label for="satuan">Satuan:</label>
                                <select name="satuan" id="satuan" class="form-control" required>
                                    <option value="Liter">Liter</option>
                                    <option value="Kiloliter">Kiloliter</option>
                                </select>
                            </div>
                
                            <div class="form-group">
                                <label for="tanggal_pembelian">Tanggal Pembelian:</label>
                                <input type="date" name="tanggal_pembelian" id="tanggal_pembelian" class="form-control" required>
                            </div>
                
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </section>



    @endsection
