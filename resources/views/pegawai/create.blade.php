<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$judul}}</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container">
		<h1 class="text-center mt-5">Tambah Data Pegawai</h1>
		<form action="/pegawai/store" method="POST">
			@csrf
			<div class="form-group">
				<label for="nama">Nama</label>
				<input class="form-control" type="text" name="nama" id="nama" placeholder="Masukan Nama">
				@error('nama')
				    <div class="mt-3 alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group">
				<label for="jabatan">Jabatan</label>
				<input class="form-control" type="text" name="jabatan" id="jabatan" placeholder="Masukan Jabatan">
				@error('jabatan')
				    <div class="mt-3 alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group">
				<label for="umur">Umur</label>
				<input class="form-control" type="text" name="umur" id="umur" placeholder="Masukan Umur">
				@error('umur')
				    <div class="mt-3 alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input class="form-control" type="text" name="alamat" id="alamat" placeholder="Masukan Alamat">
				@error('alamat')
				    <div class="mt-3 alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			<button type="submit" class="btn btn-primary">Tambah Data</button>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>