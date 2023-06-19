@extends('layouts.blackand.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Buku</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active">Data Buku</li>
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
                          <h3 class="card-title">Form Edit Buku</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('books.update', $book->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="title">Judul:</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{ $book->title }}" required>
                            </div>
                            <div>
                                <label for="author">Penulis:</label>
                                <input type="text" class="form-control" name="author" id="author" value="{{ $book->author }}" required>
                            </div>
                            <div>
                                <label for="year">Tahun Terbit:</label>
                                <input type="number" class="form-control" name="year" id="year" value="{{ $book->year }}" required>
                            </div>
                           <br>
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
