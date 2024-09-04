@extends('layouts.app')

@section('title', 'MenuAkses')

@section('content')
    <a href="{{ route('menu-akses.create') }}" class="btn btn-primary my-3">Tambah Karyawan</a>
    <table cellpadding="2" cellspacing="0" class="table">
        <tr>
            <th>ID</th>
            <th>ID Karyawan</th>
            <th>ID Menu</th>
            
            <th>Aksi</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->nip }}</td>
                <td>{{ $d->nama }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('menu-akses.show', $d->id) }}" class="mr-3 btn btn-info">Detail</a>
                        <a href="{{ route('menu-akses.edit', $d->id) }}" class="mr-3 btn btn-primary">Ubah</a>
                        <form action="{{ route('menu-akses.destroy', $d->id) }}" method="post" class="mr-3">
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
