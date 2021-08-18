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
   
<form action="{{ route('petugas.store') }}" method="POST">
    @csrf
  
    <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label for="nama_peserta">Nama Peserta Diklat</label>
            <input type="text" class="form-control" name="nama_peserta">
          </div>
          <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" name="nis">
          </div>
          <div class="form-group">
            <label for="nama_perusahaan">Nama Perusahaan</label>
            <input type="text" class="form-control" name="nama_perusahaan">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="tanggal_pelaksanaan">Tanggal Pelaksanaan</label>
              <input type="date" class="form-control" name="tanggal_pelaksanaan">
            </div>
            <div class="form-group col-md-6">
              <label for="tanggal_berakhir">Tanggal Berakhir</label>
              <input type="date" class="form-control" name="tanggal_berakhir">
            </div>
          </div>
          <div class="form-group">
            <label for="kontak">Kontak</label>
            <input type="text" class="form-control" name="kontak" placeholder="08xxxxxxxxxx">
          </div>
          <div class="form-group">
            <label for="tanggal_surat">Tanggal Surat Kirim</label>
            <input type="date" class="form-control" name="tanggal_surat">
          </div>
          <div class="form-group">
            <label for="monitoring">Monitoring</label>
            <input type="text" class="form-control" name="monitoring">
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" name="keterangan">
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
   
</form>
@endsection