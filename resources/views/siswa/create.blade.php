@extends('template/master')

@section('content')
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NISN:</strong>
                <input type="text" name="nisn" class="form-control" placeholder="NISN">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="form-group">
              <label for="">Kelas</label>
              <select name="kelas_id" >
              <option value=""></option>
              @foreach ($kelass as $kel)
              <option value="{{$kel->id}}">{{ $kel->nama_kelas }}</option>
                
              @endforeach
              </select>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection