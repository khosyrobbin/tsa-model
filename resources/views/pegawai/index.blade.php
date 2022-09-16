@extends('mahasiswa.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <!-- Start kode untuk form pencarian -->
            <p>Cari Data Pegawai :</p>
            <form action="/cari" method="GET">
                <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
                <input type="submit" value="CARI">
            </form>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('pegawai.create') }}"> Input Pegawai</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>No HP</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jabatan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pegawai as $data)
            <tr>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->no_hp }}</td>
                <td>{{ $data->jk }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->tgl_lahir }}</td>
                <td>{{ $data->nama_jabatan }}</td>
                <td>
                    <form action="{{ route('pegawai.destroy', ['pegawai' => $data->id_pegawai]) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('pegawai.show', $data->id_pegawai) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('pegawai.edit', $data->id_pegawai) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
    {{-- Halaman : {{ $pegawai->currentPage() }} <br/>
    {{ $pegawai->links() }} --}}
    @if ($pegawai->hasPages())
        <div class="card-footer">
            {{ $pegawai->links() }}
        </div>
    @endif
    </div>
@endsection
