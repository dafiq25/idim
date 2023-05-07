@extends('layouts.master')

@section('tittle', 'Tambah Pembelian')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Tambah Table Pembelian</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Pembelian</li>
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
              <h3 class="card-title">Data Pembelian</h3>
            </div>
            <form action="/insertPembelian" method="post" role="form">
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
                  <label for="namaBarang">supplier</label>
                  <select name="supplier" class="form-control">
                    <option selected disabled selected hidden>Pilih supplier</option>
                    @foreach($supplier as $p)
                    <option value="{{$p->id}}">{{$p->nama_suplier}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="hargaBeli">Harga Beli</label>
                  <input type="number" class="form-control" id="hargaBeli" name="hargaBeli" placeholder="Masukkan harga Beli">
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