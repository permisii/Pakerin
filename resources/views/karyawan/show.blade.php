@extends('layouts.app')

@section('title', 'Karyawan Details')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Karyawan Details</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">NIP:</div>
                        <div class="col-md-8">{{ $karyawan->nip }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Nama:</div>
                        <div class="col-md-8">{{ $karyawan->nama }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Password:</div>
                        <div class="col-md-8">*******</div> <!-- Masked for security -->
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('karyawans.edit', $karyawan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('karyawans.destroy', $karyawan->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this karyawan?');">
                            Delete
                        </button>
                    </form>
                    <a href="{{ route('karyawans.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
