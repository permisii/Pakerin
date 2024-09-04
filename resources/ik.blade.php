<!DOCTYPE html>
<html>

<head>
  <title>Data IK</title>
</head>

<body>
  <h1>Data IK</h1>
  <a href="/ik/tambah">+ Tambah IK</a>
  <table border="1" cellpadding="2" cellspacing="0">
    <tr>
      <th>ID IK</th>
      <th>ID KARYAWAN</th>
      <th>Tanggal</th>
      <th>Aksi</th>
    </tr>
    @foreach ($data as $d)
    <tr>
      <td>{{$d->id}}</td>
      <td>{{$d->id_karyawan}}</td>
      <td>{{$d->tanggal}}</td>
      <td><a href="/ik/ubah/{{$d->id}}">Ubah</a> | <a href="/ik/hapus/{{$d->id}}">Hapus</a></td>
    </tr>
    @endforeach
  </table>
</body>

</html>
