<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$judul}}</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		<h1 class="text-center mt-3">Data Pegawai</h1>
		<a href="/pegawai/create" class="btn btn-primary mb-2">Tambah Data</a>
		<form action="" class="form-inline float-right">
			<div class="form-group mr-2">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-primary">Search</button>
		</form>
		<table class="table table-bordered table-hover">
			<thead class="thead-light">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>Umur</th>
					<th>Alamat</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pegawai as $p)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$p->nama}}</td>
						<td>{{$p->jabatan}}</td>
						<td>{{$p->umur}}</td>
						<td>{{$p->alamat}}</td>
						<td><a href="pegawai/edit/{{$p->id}}" class="btn btn-warning btn-sm">Edit</a> <a href="pegawai/hapus/{{$p->id}}" class="btn btn-danger btn-sm">Hapus</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>