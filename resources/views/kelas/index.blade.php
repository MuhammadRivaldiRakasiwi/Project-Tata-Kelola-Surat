@extends('template/master')

@section('title')
    List Data
@endsection

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-right mr-3">
            <a class="btn btn-success" href="{{ route('kelas.create') }}">Tambah data</a>
   
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Crud Data Kelas</h4>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tr>
                          <th>No</th>
                          <th>Nama Kelas</th>
                          <th>Jurusan</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        @foreach ($kelass as $kelas)  
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{ $kelas->nama_kelas }}</td>
                          <td>{{ $kelas->jurusan}}</td>

                          <td><a class="btn btn-primary btn-sm" href="{{ route('kelas.edit',$kelas->id) }}">Edit</a>
                          <td>
                            <form action="{{ route('kelas.destroy',$kelas->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                  
                </div>
              </div>
              
@endsection
