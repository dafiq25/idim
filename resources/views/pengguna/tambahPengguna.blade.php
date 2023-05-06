@extends('layouts.master')

@section('tittle', 'Tambah Pengguna')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Tambah Table Pengguna</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Pengguna</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<section class="content">
		<div class="container-fluid center">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Data Pengguna</h3>
            </div>
            <form action="/insertPengguna" method="post" role="form">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="namaPengguna">Nama Pengguna</label>
                  <input type="text" class="form-control" id="namaPengguna" name="namaPengguna" placeholder="Masukkan nama pengguna">
                </div>
                <div class="form-group">
                  <label for="namaDepan">Nama Depan</label>
                  <input type="text" class="form-control" id="namaDepan" name="namaDepan" placeholder="Masukkan nama depan pengguna">
                </div>
                <div class="form-group">
                  <label for="namaBelakang">Nama Belakang</label>
                  <input type="text" class="form-control" id="namaBelakang" name="namaBelakang" placeholder="Masukkan nama belakang pengguna">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="notelp">No Telepon</label>
                  <input type="number" class="form-control" id="notelp" name="notelp" placeholder="Nomor Hp">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat pengguna">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
	</section>
</div>
@endsection