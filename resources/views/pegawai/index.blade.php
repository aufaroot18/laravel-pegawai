<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$judul}}</title>
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container mt-5">
		<table class="table table-bordered table-hover">
			<thead class="thead-light">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>Umur</th>
					<th>Alamat</th>
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