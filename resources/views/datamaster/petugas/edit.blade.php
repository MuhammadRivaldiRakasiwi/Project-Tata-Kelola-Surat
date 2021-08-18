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
   
<form action="{{ route('petugas.update',$petugas->id) }}" method="POST">
    @csrf
    @method('PUT')
  
    <div class="card">
        <div class="card-body">
            <div class="form-group">
              <label for="nama_peserta">Nama Peserta Diklat</label>
              <input type="text" class="form-control" name="nama_peserta" value="{{ $petugas->nama_peserta }}">
            </div>
            <div class="form-group">
              <label for="nis">NIS</label>
              <input type="text" class="form-control" name="nis" value="{{ $petugas->nis }}">
            </div>
            <div class="form-group">
              <label for="nama_perusahaan">Nama Perusahaan</label>
              <input type="text" class="form-control" name="nama_perusahaan" value="{{ $petugas->nama_perusahaan }}">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="tanggal_pelaksanaan">Tanggal Pelaksanaan</label>
                <input type="date" class="form-control" name="tanggal_pelaksanaan" value="{{ $petugas->tanggal_pelaksanaan }}">
              </div>
              <div class="form-group col-md-6">
                <label for="tanggal_berakhir">Tanggal Berakhir</label>
                <input type="date" class="form-control" name="tanggal_berakhir" value="{{ $petugas->tanggal_berakhir }}">
              </div>
            </div>
            <div class="form-group">
              <label for="kontak">Kontak</label>
              <input type="text" class="form-control" name="kontak" placeholder="08xxxxxxxxxx" value="{{ $petugas->kontak }}">
            </div>
            <div class="form-group">
              <label for="tanggal_surat">Tanggal Surat Kirim</label>
              <input type="date" class="form-control" name="tanggal_surat" value="{{ $petugas->tanggal_surat }}">
            </div>
            <div class="form-group">
              <label for="monitoring">Monitoring</label>
              <input type="text" class="form-control" name="monitoring" value="{{ $petugas->monitoring }}">   
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <input type="text" class="form-control" name="keterangan" value="{{ $petugas->keterangan }}">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
   
</form>
@endsection