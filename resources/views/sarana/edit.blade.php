@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Sarana Prasarana</h1>

        <form method="post" action="{{ route('sarana.update', $saranaPrasarana->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_moda">Nama Moda</label>
                <input type="text" class="form-control" id="nama_moda" name="nama_moda" value="{{ old('nama_moda', $saranaPrasarana->nama_moda) }}" required>
            </div>

            <div class="form-group">
                <label for="jenis">Jenis</label>
                <input type="text" class="form-control" id="jenis" name="jenis" value="{{ old('jenis', $saranaPrasarana->jenis) }}" required>
            </div>

            <div class="form-group">
                <label for="nomor">Nomor</label>
                <input type="text" class="form-control" id="nomor" name="nomor" value="{{ old('nomor', $saranaPrasarana->nomor) }}" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi', $saranaPrasarana->deskripsi) }}</textarea>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ old('lokasi', $saranaPrasarana->lokasi) }}" required>
            </div>

            <div class="form-group">
                <label for="kapasitas">Kapasitas</label>
                <input type="number" class="form-control" id="kapasitas" name="kapasitas" value="{{ old('kapasitas', $saranaPrasarana->kapasitas) }}" required>
            </div>

            <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" class="form-control" id="satuan" name="satuan" value="{{ old('satuan', $saranaPrasarana->satuan) }}" required>
            </div>

            <div class="form-group">
                <label for="tanggal_pembelian">Tanggal Pembelian</label>
                <input type="date" class="form-control" id="tanggal_pembelian" name="tanggal_pembelian" value="{{ old('tanggal_pembelian', $saranaPrasarana->tanggal_pembelian) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
