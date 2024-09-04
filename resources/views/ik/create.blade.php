@extends('layouts.app') <!-- Assuming you have a main layout file -->

@section('title', 'Tambah IK')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah IK</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('ik.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="id">ID IK</label>
                                <input type="text" name="nip" id="nip" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="id_karyawan">ID KARYAWAN</label>
                                <input type="text" name="nama" id="nama" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="tanggal">TANGGAL</label>
                                <input type="text" name="nama" id="nama" class="form-control" required>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Create</button>
                                <a href="{{ route('karyawans.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
