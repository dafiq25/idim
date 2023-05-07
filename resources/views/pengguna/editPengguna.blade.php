@extends('layouts.master')

@section('tittle', 'Edit Pengguna')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Edit Table Pengguna</h1>
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
              <h3 class="card-title">Edit Pengguna</h3>
            </div>
            <form action="/updatePengguna" method="post" role="form">
              @csrf
              <div class="card-body">
                <input type="text" value="{{$data[0]->id}}" name="id" hidden>
                <div class="form-group">
                  <label for="namaPengguna">Nama Pengguna</label>
                  <input type="text" class="form-control" id="namaPengguna" name="namaPengguna" value="{{$data[0]->nama_pengguna}}">
                </div>
                <div class="form-group">
                  <label for="namaDepan">Nama Depan</label>
                  <input type="text" class="form-control" id="namaDepan" name="namaDepan" value="{{$data[0]->nama_depan}}">
                </div>
                <div class="form-group">
                  <label for="namaBelakang">Nama Belakang</label>
                  <input type="text" class="form-control" id="namaBelakang" name="namaBelakang" value="{{$data[0]->nama_belakang}}">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" value="{{$data[0]->password}}">
                </div>
                <div class="form-group">
                  <label for="notelp">No Telepon</label>
                  <input type="number" class="form-control" id="notelp" name="notelp" value="{{$data[0]->noHp}}">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" value="{{$data[0]->alamat}}">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
	</section>
</div>
@endsection