<IDOCTYPE html>
<html Lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<title>Add Students</title>
</head>
<body>
<form action="{{ url('/students/store') }}" method="post">
@csrf
<label for="nis">NIS</label>
<br>
<input type="text" name="nis" id="nis">
<br><br>
<label for="name">Nama</label>
<br>
<input type="text" name="name" id="name":>
<br><br>
<label for="">Jenis Kelamin</label>
<br>
<input type="radio" name="gender" id="laki-laki" value="Laki-laki">
<label for="laki-laki">Laki-laki</label>
<br>
<input type="radio" name="gender" id="Perempuan" value="Perempuan">
<label for="Perempuan">Perempuan</label>
<br><br>
<label for="religion">Agama</label>
<br>
<input type="text" name="religion" id="religion">
<br><br>
<label for="birth_day">Tanggal Lahir</label>
<br>
<input type="date" name="birth day" id="birth_day">
<br><br>
<label for="class">Nama Kelas</label>
<br>
<input type="text" name="class" id="class">
<br><br>
<label for="address">Alamat</label>
<br>
<textarea name="address" id="address" cols="38" rows="6"></textarea>
<button type="submit">Simpan</button>
</form>
</body>
</html>