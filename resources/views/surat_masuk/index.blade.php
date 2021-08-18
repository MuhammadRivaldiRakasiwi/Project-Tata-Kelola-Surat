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
        <a class="btn btn-success" href="{{ route('suratmasuk.create') }}"> Input Data</a>
        <hr>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-md">
        <tr>
          <th>No</th>
          <th>Surat Masuk</th>
          <th>Keterangan</th>
          <th>Action</th>
        </tr>
        @foreach ($suratmasuk as $sum)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $sum->surat }}</td>
            <td>{{ $sum->keterangan }}</td>
            
            <td>
                <form action="{{ route('suratmasuk.destroy',$sum->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('suratmasuk.show',$sum->surat) }}">Tampil</a>
                    
                    <a class="btn btn-primary" href="{{ route('suratmasuk.edit',$sum->id) }}">Edit</a>
   
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