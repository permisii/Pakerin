@extends('layouts.app') <!-- Assuming you have a main layout file -->

@section('title', 'Edit IK')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit IK</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('ik.update', $ik->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="id">ID IK</label>
                                <input type="text" name="nip" id="nip" class="form-control"
                                    value="{{ $ik->id }}" required>
                            </div>

                            <div class="form-group">
                                <label for="id_karyawan">ID KARYAWAN</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    value="{{ $ik->id_karyawan }}" required>
                            </div>

                            <div class="form-group">
                                <label for="tanggal">TANGGAL</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    value="{{ $ik->tanggal }}" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('ik.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
