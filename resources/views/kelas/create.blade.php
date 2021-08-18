@extends('template/master')

@section('content')
<form action="{{ route('kelas.store') }}" method="POST">
    @csrf
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kelas:</strong>
                <input type="text" name="nama_kelas" class="form-control" placeholder="Nama Kelas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jurusan:</strong>
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection