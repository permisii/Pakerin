<!DOCTYPE html>
<html>

<head>
  <title>Data Karyawan</title>
</head>

<body>
  <h1>Data Karyawan</h1>
  <a href="/user/tambah">+ Tambah Karyawan</a>
  <table border="1" cellpadding="2" cellspacing="0">
    <tr>
      <th>ID</th>
      <th>Nomor Induk Pekerja</th>
      <th>Nama Karyawan</th>
      <th>Aksi</th>
    </tr>
    @foreach ($data as $d)
    <tr>
      <td>{{$d->user_id}}</td>
      <td>{{$d->karyawan_nip}}</td>
      <td>{{$d->karyawan_nama}}</td>
      <td><a href="/user/ubah/{{$d->user_id}}">Ubah</a> | <a href="/user/hapus/{{$d->user_id}}">Hapus</a></td>
    </tr>
    @endforeach
  </table>
</body>

</html>
