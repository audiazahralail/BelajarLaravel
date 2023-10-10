<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>From Tambah Data</h1>
<form action="/home/simpan" method="POST">
    {{ csrf_field()}}
    Nama <input type="text" name="nama" required="required"><br/>
    <br>
    Umur <input type="number" name="umur" required="required"><br/>
    <br>
    Kota <input type="text" name="kota" required="required"><br/>
    <br>
    <input type="submit" value="Simpan Data">
</form>
</body>

</html>