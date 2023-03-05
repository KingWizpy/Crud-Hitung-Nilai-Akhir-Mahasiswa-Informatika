@extends('navbar')
@section('title','Edit Data Mahasiswa')
@section('content')
<div class="container">
  <div class="row mt-5">
    <div class="col-md-12">
      <h2>Edit Nilai Mahasiswa</h2>
      <p>Silahkan Masukkan data dengan benar dan lengkap!</p>
      <form action="{{route('mahasiswa.update',$data->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">NPM</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="npm" value="{{ $data->npm}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Absen</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="absen" value="{{ $data->absen}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">UTS</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uts" value="{{ $data->uts}}">
            </div>
            <button type="submit" class="btn btn-danger">Edit</button>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="{{ $data->nama}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tugas</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tugas" value="{{ $data->tugas}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">UAS</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uas" value="{{ $data->uas}}">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection