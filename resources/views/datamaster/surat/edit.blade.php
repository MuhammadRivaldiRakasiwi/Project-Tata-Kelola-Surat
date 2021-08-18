@extends('template/master')

@section('title')
    Edit Data
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Edit Gagal</strong> Maaf ada kesalahan saat input data<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('surat.update',$surat->id) }}" method="POST">
    @csrf
    @method('PUT')
  
    <div class="card">
        <div class="card-body">
            <div class="form-group">
              <label for="nama_peserta">Template Surat</label>
              <input type="text" class="form-control" name="template_surat" value="{{ $surat->template_surat }}">
            </div>
            <div class="form-group">
              <label for="nis">Logo Perusahaan</label>
              <input type="file" class="form-control" name="logo_perusahaan" value="{{ $surat->logo_perusahaan }}">
            </div>
            <div class="form-group">
              <label for="nama_perusahaan">Nama Perusahaan</label>
              <select name="petugas_id" >
              <option value=""></option>
              @foreach ($petugas as $pet)
              <option value="{{$pet->id}}">{{ $pet->nama_perusahaan }}</option>
                
              @endforeach
              </select>
              <!-- <input type="text" class="form-control" name="nama_perusahaan" value="{{ $surat->petugas->nama_perusahaan }}"> -->
            </div>
            <div class="form-group">
              <label for="kontak">Alamat Perusahaan</label>

              <input type="text" class="form-control" name="alamat_perusahaan"  value="{{ $surat->alamat_perusahaan }}">
            </div>
            <div class="form-group">
              <label for="tanggal_surat">Jabatan</label>
              <input type="text" class="form-control" name="jabatan" value="{{ $surat->jabatan }}">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
   
</form>
@endsection