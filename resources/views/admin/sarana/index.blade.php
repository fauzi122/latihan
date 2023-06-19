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
<div class="row">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                  <a href="/prasarana/create"><i class="fa fa-plus"></i> </a>
                    Tambah Sarana Prasarana</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama Moda</th>
                        <th>Jenis</th>
                        <th>Nomor</th>
                        <th>Kapasitas</th>
                        <th>Satuan</th>
                        <th>Tanggal Pembelian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sarana as $sarana)
                        <tr>
                            <td>{{ $sarana->nama_moda }}</td>
                            <td>{{ $sarana->jenis }}</td>
                            <td>{{ $sarana->nomor }}</td>
                            <td>{{ $sarana->kapasitas }}</td>
                            <td>{{ $sarana->satuan }}</td>
                            <td>{{ $sarana->tanggal_pembelian }}</td>
                            <td>
                                <a href="{{ route('prasarana.show', $sarana->id) }}" class="btn btn-info btn-sm">Show</a>
                                <a href="{{ route('prasarana.edit', $sarana->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('prasarana.destroy', $sarana->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus sarana prasarana ini?')">
                                     
                                         Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </div>
@endsection
