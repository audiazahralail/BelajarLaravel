<!DOCTYPE html>
<html>
    <body>
        <h2>BIODATA SISWA</h2>
    <form action="/home/tambah">
        <table border="1">
            <tr>

        <th>NAMA</th>
        <th>UMUR</th>
        <th>KOTA</th>
        <th>OPSI</th>

</tr>
@foreach($mahasiswa as $mhs)
<tr>
    <td>{{ $mhs->nama }}</td>
    <td>{{ $mhs->umur }}</td> 
    <td>{{ $mhs->kota }}</td>
    <td>
        <a href="/home/edit/{{$mhs->id}}">EDIT</a>
        <a href="/home/hapus/{{$mhs->id}}">HAPUS</a>
</td>
</tr>
@endforeach
</table>
<br>
<input type="submit" value="Tambah Data">
</body>
</html>