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
                          <h3 class="card-title">Form Edit Data Pengguna</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('prasarana.update', $sarana->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                
                            <div class="form-group">
                                <label for="nama_moda">Nama Moda:</label>
                                <input type="text" name="nama_moda" id="nama_moda" class="form-control" value="{{ $sarana->nama_moda }}" required>
                            </div>
                
                            <div class="form-group">
                                <label for="jenis">Jenis:</label>
                                <select name="jenis" id="jenis" class="form-control" required>
                                    <option value="Tangki" {{ $sarana->jenis == 'Tangki' ? 'selected' : '' }}>Tangki</option>
                                    <option value="Pipa" {{ $sarana->jenis == 'Pipa' ? 'selected' : '' }}>Pipa</option>
                                    <option value="Barge" {{ $sarana->jenis == 'Barge' ? 'selected' : '' }}>Barge</option>
                                </select>
                            </div>
                
                            <div class="form-group">
                                <label for="nomor">Nomor:</label>
                                <input type="text" name="nomor" id="nomor" class="form-control" value="{{ $sarana->nomor }}" required>
                            </div>
                
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi:</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required>{{ $sarana->deskripsi }}</textarea>
                            </div>
                
                            <div class="form-group">
                                <label for="lokasi">Lokasi:</label>
                                <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $sarana->lokasi }}" required>
                            </div>
                
                            <div class="form-group">
                                <label for="kapasitas">Kapasitas:</label>
                                <input type="text" name="kapasitas" id="kapasitas" class="form-control" value="{{ $sarana->kapasitas }}" required>
                            </div>
                
                            <div class="form-group">
                                <label for="satuan">Satuan:</label>
                                <select name="satuan" id="satuan" class="form-control" required>
                                    <option value="Liter" {{ $sarana->satuan == 'Liter' ? 'selected' : '' }}>Liter</option>
                                    <option value="Kiloliter" {{ $sarana->satuan == 'Kiloliter' ? 'selected' : '' }}>Kiloliter</option>
                                </select>
                            </div>
                            
                
                            <div class="form-group">
                                <label for="tanggal_pembelian">Tanggal Pembelian:</label>
                                <input type="date" name="tanggal_pembelian" id="tanggal_pembelian" class="form-control" value="{{ $sarana->tanggal_pembelian }}" required>
                            </div>
                
                            <button type="submit" class="btn btn-primary">Update</button>
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
