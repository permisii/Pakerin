<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>Form Tambah Data Karyawan</h1>
  <form action="/user/tambah_simpan" method="post">
    {{ csrf_field() }}

    <label>Nomor Induk Pekerja</label>
    <input type="text" name="Masukkan Nomor Induk Pekerja">
    <br>
    <label>Nama Karyawan</label>
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Masukkan Password">
    <br>
    <br><br>
    <input type="submit" value="Simpan" class="btn btn-success">
  </form>
</body>

</html>
