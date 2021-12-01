@extends('layouts.template')

@section('tab')
    Data Karyawan
@endsection

@section('title')
    Data Karyawan
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil !</strong> You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <!-- Button trigger modal -->
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-plus"></i>
                            Tambah
                        </a>

                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Masuk</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($karyawan as $x)

                                    <tr>
                                        <th scope="row">
                                            {{ $loop->iteration + $karyawan->perpage() * ($karyawan->currentPage() - 1) }}
                                        </th>
                                        <td>{{ $x->nama_karyawan }}</td>
                                        <td>{{ date('d F Y', strtotime($x->tanggal_masuk)) }}</td>
                                        <td>
                                        @if ($x->status === 'tetap')
                                            <button class="btn btn-success" style="width: 7em">Tetap</button>
                                            @elseif ($x->status === 'magang')
                                            <button class="btn btn-danger" style="width: 7em">Magang</button>
                                            @elseif ($x->status === 'kontrak')
                                            <button class="btn btn-primary" style="width: 7em">Kontrak</button>
                                        @endif</td>
                                        <td>
                                            <form action="{{ route('karyawan.destroy', $x->id) }}" method="POST">

                                                <a href="{{ route('karyawan.edit', $x->id) }}" class="btn btn-warning"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="{{ route('karyawan.show', $x->id) }}" class="btn btn-success"><i
                                                        class="fas fa-eye"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Are you sure to delete data{{ $x->nama_karyawan }}')"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        {{ $karyawan->appends(Request::all())->links() }}
                    </div>
                </div>

            </div>

        </div>
        <!-- Modal Logout -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title" id="exampleModalLabel">Data Karyawan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('karyawan.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">



                            <label for="" class="form-label text-lg">Jabatan</label>



                            <select class="form-control" name="id_jabatan">
                                <option value="">Pilih Jabatan</option>
                                @foreach ($jabatan as $j)
                                    <option value="{{ $j->id }}">{{ $j->nama_jabatan }}</option>
                                @endforeach
                            </select>

                            <label for="" class="form-label">Nama Karyawan</label>
                            <input class="form-control" name="nama_karyawan" value="{{ old('nama_karyawan') }}"
                                required type="text" id="" placeholder="Isi nama karyawan">

                            <label for="" class="form-label text-lg">Status</label>
                            <select class="form-control" name="status" id="">
                                <option value=""> - PILIH -</option>
                                <option value="tetap">Tetap</option>
                                <option value="kontrak">Kontrak</option>
                                <option value="magang">Magang</option>
                            </select>
{{-- 
                            <label for="" class="form-label">Tanggal Masuk</label>
                            <input class="form-control" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}"
                                required type="date" id="" placeholder=""> --}}

                            <label for="" class="form-label">No. Hp</label>
                            <input class="form-control" name="no_hp" value="{{ old('no_hp') }}" required type="number"
                                id="" placeholder="Isi no.hp">

                            <label for="" class="form-label">Username</label>
                            <input class="form-control" name="username" value="{{ old('username') }}" required
                                type="text" id="" placeholder="Isi username">

                            <label for="" class="form-label">Password</label>
                            <input class="form-control" name="password" value="{{ old('password') }}" required
                                type="password" id="" placeholder="Isi password">


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
