@extends('layouts.template')

@section('tab')
    Edit Karyawan
@endsection

@section('title')
    Edit Karyawan
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('karyawan.index')}}" class="btn btn-primary">
                        <i class="fas fa-backspace "></i>
                        Kembali
                    </a>
                    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
                        @csrf

                        {{method_field('PUT')}}

                        <div class="modal-body">


                            <label for="" class="form-label text-lg">Jabatan</label>



                            <select class="form-control" name="id_jabatan">
                                <option value="{{ $karyawan->id_jabatan }}">{{ $karyawan->jabatan->nama_jabatan }}</option>
                                @foreach ($jabatan as $j)
                                    <option value="{{ $j->id }}">{{ $j->nama_jabatan }}</option>
                                @endforeach
                            </select>

                            <label for="" class="form-label">Nama Karyawan</label>
                            <input class="form-control" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}"
                                required type="text" id="" placeholder="Isi nama karyawan">

                            <label for="" class="form-label text-lg">Status</label>
                            <select class="form-control" name="status" id="">
                                <option value="{{ $karyawan->status }}">{{$karyawan->status}}</option>
                                <option value=""> - PILIH -</option>
                                <option value="tetap">Tetap</option>
                                <option value="kontrak">Kontrak</option>
                                <option value="magang">Magang</option>
                            </select>

                            {{-- <label for="" class="form-label">Tanggal Masuk</label>
                            <input class="form-control" name="tanggal_masuk" value="{{ $karyawan->tanggal_masuk }}"
                                required type="date" id="" placeholder=""> --}}

                            <label for="" class="form-label">No. Hp</label>
                            <input class="form-control" name="no_hp" value="{{ $karyawan->no_hp }}" required type="number"
                                id="" placeholder="">

                            <label for="" class="form-label">Username</label>
                            <input class="form-control" name="username" value="{{ $karyawan->username }}" required
                                type="text" id="" placeholder="">
                            <label for="" class="form-label">Password</label>
                            <input class="form-control" name="password" value=""
                                type="text" id="" placeholder="">


                        </div>
                        <div class="modal-footer">
                            <a href="{{route('karyawan.index')}}" class="btn" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
