@extends('layouts.master')

@section('tittle', 'Tambah Hak Akses')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Tambah Table Hak Akses</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Hak Akses</li>
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
              <h3 class="card-title">Data Hak Akses</h3>
            </div>
            <form action="/insertHakAkses" method="post" role="form">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="namaAkses">Nama Akses</label>
                  <input type="text" class="form-control" id="namaAkses" name="namaAkses" placeholder="Masukkan nama hak akses">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan keterangan hak akses">
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