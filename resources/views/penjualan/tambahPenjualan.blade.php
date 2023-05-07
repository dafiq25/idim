@extends('layouts.master')

@section('tittle', 'Tambah Penjualan')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Tambah Table Penjualan</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Penjualan</li>
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
              <h3 class="card-title">Data Penjualan</h3>
            </div>
            <form action="/insertPenjualan" method="post" role="form">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="namaBarang">Barang</label>
                  <select name="barang" class="form-control">
                    <option selected disabled selected hidden>Pilih barang</option>
                    @foreach($barang as $b)
                    <option value="{{$b->id}}">{{$b->nama_barang}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="namaBarang">Pelanggan</label>
                  <select name="pelanggan" class="form-control">
                    <option selected disabled selected hidden>Pilih pelanggan</option>
                    @foreach($pelanggan as $p)
                    <option value="{{$p->id}}">{{$p->nama_pelanggan}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="hargaJual">Harga Jual</label>
                  <input type="number" class="form-control" id="hargaJual" name="hargaJual" placeholder="Masukkan harga jual">
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