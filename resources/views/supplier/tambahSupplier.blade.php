@extends('layouts.master')

@section('tittle', 'Tambah Supplier')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Tambah Table Supplier</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Supplier</li>
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
              <h3 class="card-title">Data Supplier</h3>
            </div>
            <form action="/insertSupplier" method="post" role="form">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="namaSupplier">Nama Supplier</label>
                  <input type="text" class="form-control" id="namaSupplier" name="namaSupplier" placeholder="Masukkan nama supplier">
                </div>
                <div class="form-group">
                  <label for="alamatSupplier">Alamat</label>
                  <input type="text" class="form-control" id="alamatSupplier" name="alamatSupplier" placeholder="Masukkan alamat supplier">
                </div>
                <div class="form-group">
                  <label for="kontakSupplier">Kontak</label>
                  <input type="number" class="form-control" id="kontakSupplier" name="kontakSupplier" placeholder="Masukkan kontak supplier">
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