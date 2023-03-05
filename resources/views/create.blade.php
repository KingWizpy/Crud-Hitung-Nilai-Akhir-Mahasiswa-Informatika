@extends('navbar')
@section('title','Masukkan Data Mahasiswa')
@section('content')
<div class="container">
  <div class="row mt-5">
    <div class="col-md-12">
      <h2>Tambah Nilai Mahasiswa</h2>
      <p>Silahkan Masukkan data dengan benar dan lengkap!</p>
      <form action="{{route('mahasiswa.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">NPM</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="npm" placeholder="ex: 2010631170097" required value="{{old('npm')}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Absen</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="absen" placeholder="ex: 100" required value="{{old('absen')}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">UTS</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uts" placeholder="ex: 100" required value="{{old('uts')}}">
            </div>
            <button type="submit" class="btn btn-danger">Tambah</button>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" placeholder="ex: Muhammad Gibran" required value="{{old('nama')}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tugas</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tugas" placeholder="ex: 100" required value="{{old('tugas')}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">UAS</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uas" placeholder="ex: 100" required value="{{old('uas')}}">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection