@extends('template/master')

@section('title')
    Input Data
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('surat.store') }}" method="POST">
    @csrf
  
    <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label for="template_surat">Template Surat</label>
            <input type="text" class="form-control" name="template_surat">
          </div>
          <div class="form-group">
            <label for="content_surat">Logo Perusahaan</label>
            <input type="file" class="form-control" name="logo_perusahaan">
          </div>
          <div class="form-group">
              <label for="">Nama Perusahaan</label>
              <select name="nama_perusahaan" >
              <option value=""></option>
              @foreach ($petugas as $pet)
              <option value="{{$pet->id}}">{{ $pet->nama_perusahaan }}</option>
                
              @endforeach
              </select>
            </div>
          <div class="form-group">
            <label for="alamat_perusahaan">Alamat Perusahaan</label>
            <input type="text" class="form-control" name="alamat_perusahaan">
          </div>
          <div class="form-group">
              <label for="">Monitoring</label>
              <select name="petugas_id" >
              <option value="">Monitoring</option>
              @foreach ($petugas as $pet)
              <option value="{{$pet->id}}">{{ $pet->monitoring }}</option>
                
              @endforeach
              </select>
          </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" name="jabatan">
        </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
   
</form>
@endsection