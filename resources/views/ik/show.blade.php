@extends('layouts.app')

@section('title', 'IK Details')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">IK Details</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">ID IK:</div>
                        <div class="col-md-8">{{ $ik->id }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">id Karyawan:</div>
                        <div class="col-md-8">{{ $ik->id_karyawan }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 font-weight-bold">Tanggal:</div>
                        <div class="col-md-8">{{ $ik->tanggal }}</div>
                    </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('ik.edit', $ik->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('ik.destroy', $ik->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this karyawan?');">
                            Delete
                        </button>
                    </form>
                    <a href="{{ route('ik.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
