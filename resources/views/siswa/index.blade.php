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
        <a class="btn btn-success" href="{{ route('siswa.create') }}"> Input Data</a>
        <hr>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-md">
        <tr>
          <th>Id</th>
          <th>NISN</th>
          <th>Nama Siswa</th>
          <th>Kelas</th>
          <th>Action</th>
        </tr>
        @foreach ($siswas as $sis)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $sis->nisn }}</td>
            <td>{{ $sis->nama }}</td>
            <td>{{ $sis->kelas->nama_kelas }}</td>
            
            <td>
                <form action="{{ route('siswa.destroy',$sis->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('siswa.show',$sis->id) }}">Tampil</a>
                    
                    <a class="btn btn-primary" href="{{ route('siswa.edit',$sis->id) }}">Edit</a>
   
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