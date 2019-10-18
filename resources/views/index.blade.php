<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Brand</h3>

	<a href="/product/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Opsi</th>
		</tr>
		@foreach($brand as $p)
		<tr>
			<td>{{ $p->brand_id }}</td>
			<td>{{ $p->brand_nm }}</td>
			<td>
				<a href="/product/edit/{{ $p->brand_id }}">Edit</a>
				|
				<a href="/product/hapus/{{ $p->brand_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>