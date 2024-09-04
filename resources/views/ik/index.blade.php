@extends('layouts.app')

@section('title', 'IK')

@section('content')
    <a href="{{ route('karyawans.create') }}" class="btn btn-primary my-3">Tambah IK</a>
    <table cellpadding="2" cellspacing="0" class="table">
        <tr>
            <th>ID IK</th>
            <th>ID Karyawan</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->id_karywan }}</td>
                <td>{{ $d->tanggal }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('ik.show', $d->id) }}" class="mr-3 btn btn-info">Detail</a>
                        <a href="{{ route('ik.edit', $d->id) }}" class="mr-3 btn btn-primary">Ubah</a>
                        <form action="{{ route('ik.destroy', $d->id) }}" method="post" class="mr-3">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
