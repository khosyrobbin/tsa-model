@extends('pegawai.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Pegawai
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama"
                                value="{{ $pegawai->nama }}" aria-describedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="no_hp" name="no_hp" class="form-control" id="no_hp"
                                value="{{ $pegawai->no_hp }}" aria-describedby="no_hp">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <input type="jk" name="jk" class="form-control" id="jk"
                                value="{{ $pegawai->jk }}" aria-describedby="jk">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                value="{{ $pegawai->email }}" ariadescribedby="email">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="alamat" name="alamat" class="form-control" id="alamat"
                                value="{{ $pegawai->alamat }}" ariadescribedby="alamat">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="tgl_lahir" name="tgl_lahir" class="form-control" id="tgl_lahir"
                                value="{{ $pegawai->tgl_lahir }}" ariadescribedby="tgl_lahir">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
