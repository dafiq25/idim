@extends('layouts.master')

@section('tittle', 'Barang')

@section('cssLokal')
<!-- DataTables -->
<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Table Barang</h1>
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
		<div class="row">
			<div class="col-12">
				<div class="card">
					<!-- /.card-header -->
					<div class="card-body">
						<a href="/tambahBarang" type="button" class="btn btn-success mb-3">Tambah Barang</a>
						<table id="example1" class="table table-bordered table-striped text-center">
							<thead>
							<tr>
								<th>Id Barang</th>
								<th>Id Pengguna</th>
								<th>Nama Barang</th>
								<th>Keterangan</th>
								<th>Satuan</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							@foreach($data as $d)
							<tr>
								<td>{{$d->id}}</td>
								<td>{{$d->id_pengguna}}</td>
								<td>{{$d->nama_barang}}</td>
								<td>{{$d->keterangan}}</td>
								<td>{{$d->satuan}}</td>
								<td>
									<a href="/editBarang/{{ $d->id }}" type="button" class="btn btn-info mr-3">Edit</a>
									<a href="/deleteBarang/{{ $d->id }}" type="button" class="btn btn-danger">Delete</a>
								</td>
							</tr>
							@endforeach
							</tbody>
							
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
</div>
@endsection

@section('jsLokal')
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection