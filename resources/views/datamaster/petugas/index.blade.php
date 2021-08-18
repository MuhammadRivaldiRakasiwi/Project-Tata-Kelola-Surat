@extends('template/master')

@section('title')
    List Data
@endsection

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
   
<div class="card card-body">
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('petugas.create') }}"> Input Data</a>
        <hr>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-md">
        <tr>
          <th>Id</th>
          <th>Name Peserta Diklat</th>
          <th>NIS</th>
          <th>Nama Perusahaan</th>
          <th>Tanggal Pelaksanaan</th>
          <th>Tanggal Berakhir</th>
          <th>Kontak</th>
          <th>Tanggal Surat Kirim</th>
          <th>Monitoring</th>
          <th>Keterangan</th>
          <th>Action</th>
        </tr>
        @foreach ($petugass as $pet)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pet->nama_peserta }}</td>
            <td>{{ $pet->nis }}</td>
            <td>{{ $pet->nama_perusahaan }}</td>
            <td>{{ $pet->tanggal_pelaksanaan }}</td>
            <td>{{ $pet->tanggal_berakhir }}</td>
            <td>{{ $pet->kontak }}</td>
            <td>{{ $pet->tanggal_surat }}</td>
            <td>{{ $pet->monitoring }}</td>
            <td>{{ $pet->keterangan }}</td>
            
            <td>
                <form action="{{ route('petugas.destroy',$pet->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('petugas.show',$pet->id) }}">Tampil</a>
                    
                    <a class="btn btn-primary" href="{{ route('petugas.edit',$pet->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  
@endsection