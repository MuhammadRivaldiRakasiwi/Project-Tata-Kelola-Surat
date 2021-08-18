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
        <a class="btn btn-success" href="{{ route('surat.create') }}"> Input Data</a>
        <hr>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-md">
        <tr class="text-center">
          <th>Id</th>
          <th>Template Surat</th>
          <th>Logo Perusahaan</th>
          <th>Nama Perusahaan</th>
          <th>Alamat Perusahaan</th>
          <th>Monitoring</th>
          <th>Tanggal Pelaksanaan</th>
          <th>Tanggal Berakhir</th>
          <th>Jabatan</th>
          <th>Action</th>
        </tr>
        @foreach ($surats as $sur)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $sur->template_surat }}</td>
            <td><img src="{{ url('/gambar/'.$sur->logo_perusahaan) }}" 
                    width="90" height="90"></td>
            <td>{{ $sur->petugas->nama_perusahaan }}</td>
            <td>{{ $sur->alamat_perusahaan }}</td>
            <td>{{ $sur->petugas->monitoring }}</td>
            <td>{{ $sur->petugas->tanggal_pelaksanaan }}</td>
            <td>{{ $sur->petugas->tanggal_berakhir }}</td>
            <td>{{ $sur->jabatan }}</td>
            
            
            <td>
                <form action="{{ route('surat.destroy',$sur->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('surat.show',$sur->id) }}">Tampil</a>
                    
                    <a class="btn btn-primary" href="{{ route('surat.edit',$sur->id) }}">Edit</a>
   
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