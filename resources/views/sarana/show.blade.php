@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Sarana Prasarana</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $saranaPrasarana->nama_moda }}</h5>
                <p class="card-text"><strong>Jenis:</strong> {{ $saranaPrasarana->jenis }}</p>
                <p class="card-text"><strong>Nomor:</strong> {{ $saranaPrasarana->nomor }}</p>
                <p class="card-text"><strong>Deskripsi:</strong> {{ $saranaPrasarana->deskripsi }}</p>
                <p class="card-text"><strong>Lokasi:</strong> {{ $saranaPrasarana->lokasi }}</p>
                <p class="card-text"><strong>Kapasitas:</strong> {{ $saranaPrasarana->kapasitas }}</p>
                <p class="card-text"><strong>Satuan:</strong> {{ $saranaPrasarana->satuan }}</p>
                <p class="card-text"><strong>Tanggal Pembelian:</strong> {{ $saranaPrasarana->tanggal_pembelian }}</p>
            </div>
        </div>

        <a href="{{ route('sarana.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
@endsection
