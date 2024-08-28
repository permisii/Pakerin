<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>Form Ubah Data Karyawan</h1>
  <a href="/user">Kembali</a>
  <br><br>

  <form action="/user/ubah_simpan/{{$data->karyawan}}" method="post">

    {{ csrf_field() }}
    {{method_field('PUT')}}

    <label>Nomor Induk Pekerja</label>
    <input type="text" name="nama" placeholder="Masukkan Nama" value="{{$data->karyawan_nip}}">
    <br>
    <label>Nama Karyawan</label>
    <input type="text" name="username" value="{{$data->karyawan_nama}}">
    <br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Masukkan Password" value="{{$data->password}}">
    <br>
    <br><br>
    <input type="submit" value="Ubah" class="btn btn-success">
  </form>
</body>

</html>
