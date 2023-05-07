@extends('layouts.master')

@section('tittle', 'Tambah Barang')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Tambah Table Barang</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Barang</li>
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
              <h3 class="card-title">Data Barang</h3>
            </div>
            <form action="/insertBarang" method="post" role="form">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="namaBarang">Nama Barang</label>
                  <input type="text" class="form-control" id="namaBarang" name="namaBarang" placeholder="Masukkan nama barang">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan keterangan barang">
                </div>
                <div class="form-group">
                  <label for="satuan">Satuan</label>
                  <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Masukkan satuan barang">
                </div>
                <div class="form-group">
                  <label for="pengguna">Pengguna</label>
                  <select class="form-control" name="idPengguna">
                    <option selected disabled selected hidden>Pilih pengguna</option>
                    @foreach($pengguna as $p)
                    <option value="{{$p->id}}">{{$p->nama_pengguna}}</option>
                    @endforeach
                  </select>
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