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
                          <h3 class="card-title">Form Tambah Buku</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('books.store') }}" method="POST">
                            @csrf
                            <div>
                                <label for="title">Judul:</label>
                                <input type="text"class="form-control" rows="3" required name="title" id="title" required>
                            </div>
                            <div>
                                <label for="author">Penulis:</label>
                                <input type="text"class="form-control" rows="3" required name="author" id="author" required>
                            </div>
                            <div>
                                <label for="year">Tahun Terbit:</label>
                                <input type="number"class="form-control" rows="3" required name="year" id="year" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Create</button>
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
