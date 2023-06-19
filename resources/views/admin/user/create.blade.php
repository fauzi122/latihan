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
                          <h3 class="card-title">Form Tambah Pengguna Administrator</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                            </div>
                
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                            </div>
                
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" minlength="8" required>
                            </div>
                
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{ old('alamat') }}</textarea>
                            </div>
                
                            <div class="form-group">
                                <label for="nik">NIK:</label>
                                <input type="number" name="nik" id="nik" class="form-control" value="{{ old('nik') }}" required>
                            </div>
                
                            <div class="form-group">
                                <label for="revo">Revo:</label>
                                <input type="text" name="revo" id="revo" class="form-control" value="{{ old('revo') }}" required>
                            </div>
                
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
