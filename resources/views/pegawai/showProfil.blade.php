@extends('pegawai.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Profil Pegawai
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Nama: </b>{{ $pegawai->nama }}</li>
                        <li class="list-group-item"><b>Kelas: </b>{{ $pegawai->no_hp }}</li>
                        <li class="list-group-item"><b>Jurusan: </b>{{ $pegawai->jk }}</li>
                        <li class="list-group-item"><b>Email: </b>{{ $pegawai->email }}</li>
                        <li class="list-group-item"><b>Alamat: </b>{{ $pegawai->alamat }}</li>
                        <li class="list-group-item"><b>Tanggal Lahir: </b>{{ $pegawai->tgl_lahir }}</li>
                        <li class="list-group-item"><b>Jabatan: </b>{{ $pegawai->nama_jabatan }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('pegawai.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
