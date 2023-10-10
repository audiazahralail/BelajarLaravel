<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach($mahasiswa as $mhs)
    <form method="post" action="{{route('home.update')}}">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{ $mhs->id }}"><br/>
        nama <input type="text" required="required" name="nama" value="{{ $mhs->nama }}"><br/>
        <br>
        umur <input type="number" required="required" name="umur" value="{{ $mhs->umur }}"><br/>
        <br>
        kota <input type="text" required="required" name="kota" value="{{ $mhs->kota }}"><br/>
        <br>
<input type="submit" value="simpan data">
</form>
@endforeach
</body>