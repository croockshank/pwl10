@extends('mahasiswas.layout')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-10">
        <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
    </div>
    <div class="col-sm-4">
        <h2>KARTU HASIL STUDI</h2>
    </div>
</div>
@if($mahasiswa)
<p><strong>Nim&nbsp;: </strong>{{ $Mahasiswa->nim }}</p>
<p><strong>Nama&nbsp;: </strong>{{ $Mahasiswa->nama }}</p>
<p><strong>Kelas&nbsp;: </strong>{{ $Mahasiswa->Kelas->nama_kelas }}</p>
@else
<h2>Belum ada data!</h2>
@endif
<table class="table table-bordered">
    <tr>
        <th>Mata Kuliah</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Nilai</th>
    </tr>
    @if($nilai)
    @foreach($nilai as $Nilai)
    <tr>
        <td>{{ $Nilai->matakuliah->nama_matkul }}</td>
        <td>{{ $Nilai->matakuliah->sks }}</td>
        <td>{{ $Nilai->matakuliah->semester }}</td>
        <td>{{ $Nilai->nilai }}</td>
    </tr>
    @endforeach
    @endif
</table>
<div class="row justify-content-end">
    <a href="{{ route('mahasiswas.index') }}" class="btn btn-danger">Kembali</a>
</div>
@endsection