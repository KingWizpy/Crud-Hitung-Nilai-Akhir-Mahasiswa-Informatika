@extends('navbar')
@section('title','Informatika')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <h2>Daftar Nilai Mahasiswa</h2>
                    <h6>Dibawah ini merupakan daftar nilai program studi <b style="color: red">Teknik Informatika</b></h6>
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('mahasiswa.create')}}" class="btn btn-danger">Tambah Data</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                {{$message}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
    <div class="row mt-5">
        <table class="table table-bordered align-middle" style="text-align: center">
            <tr>
                <th rowspan="2">#</th>
                <th rowspan="2">NPM</th>
                <th rowspan="2">Nama Lengkap</th>
                <th colspan="4">Nilai</th>
                <th colspan="4">Presentase</th>
                <th rowspan="2">Nilai Akhir</th>
                <th rowspan="2">Keterangan</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th>Absen</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Absen(10%)</th>
                <th>Tugas(20%)</th>
                <th>UTS(30%)</th>
                <th>UAS(40%)</th>
            </tr>
            @foreach ($data as $mhs)
            <tr>
                <td>{{$mhs->id}}</td>
                <td>{{$mhs->npm}}</td>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->absen}}</td>
                <td>{{$mhs->tugas}}</td>
                <td>{{$mhs->uts}}</td>
                <td>{{$mhs->uas}}</td>
                <td><?php
                    $nilai_absen =  $mhs['absen'] * .1;
                    echo $nilai_absen;
                    ?>
                </td>
                <td>
                    <?php
                    $nilai_tugas =  $mhs['tugas'] * .2;
                    echo $nilai_tugas;
                    ?>
                </td>
                <td><?php
                    $nilai_uts =  $mhs['uts'] * .3;
                    echo $nilai_uts;
                    ?>
                </td>
                <td>
                    <?php
                    $nilai_uas =  $mhs['uas'] * .4;
                    echo $nilai_uas;
                    ?>
                </td>
                <td>
                    <?php
                    $nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;
                    echo $nilai_akhir;
                    ?>
                <td>
                    @if ($nilai_akhir >= 70 && $nilai_akhir <= 100) <b style="color: green">Lulus</b>
                        @elseif ($nilai_akhir >= 0 && $nilai_akhir < 70) <b style="color:crimson">Tidak Lulus</b>
                            @endif
                </td>
                <td>
                    <form action="{{ route('mahasiswa.destroy',$mhs->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('mahasiswa.edit',$mhs->id)}}" class="btn btn-md btn-warning">Edit</a>
                        <br>.
                        <button type="submit" class="btn btn-md btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection