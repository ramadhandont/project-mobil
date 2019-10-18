<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/product"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($brand as $p)
	<form action="/product/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->brand_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->brand_nm }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>