<!DOCTYPE html>
<html>

<head>
  <title>Data Instruksi Kerja</title>
</head>

<body>
  <h1>Data Instruksi Kerja</h1>
  <table border="1" cellpadding="2" cellspacing="0">
    <tr>
      <th>ID</th>
      <th>Nomor PK</th>
      <th>NIP Karyawan</th>
      <th>Daftar Pekerjaan</th>
      <th>Tanggal</th>
    </tr>
    @foreach ($data as $d)
    <tr>
      <td>{{$d->level_id}}</td>
      <td>{{$d->karyawan_nip}}</td>
      <td>{{$d->level_nama}}</td>
    </tr>
    @endforeach
  </table>
</body>

</html>
