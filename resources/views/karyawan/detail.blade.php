@extends('layouts.template')

@section('tab')
    Detail Karyawan
@endsection

@section('title')
    Detail Karyawan
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
                    <table class="table table-hover mt-4">
                        <tr>
                            <th>
                                Jabatan
                            </th>
                            <td>{{$karyawan->jabatan->nama_jabatan}}</td>
                        </tr>
                        <tr>
                            <th>
                                Nama Karyawan
                            </th>
                            <td>{{$karyawan->nama_karyawan}}</td>
                        </tr>
                        <tr>
                            <th>
                                Status
                            </th>
                            <td>{{$karyawan->status}}</td>
                        </tr>
                        <tr>
                            <th>
                                Tanggal Masuk
                            </th>
                            <td>{{date('d F Y', strtotime($karyawan->tanggal_masuk))}}</td>
                        </tr>

                        <tr>
                            <th>
                                No. Hp
                            </th>
                            <td>{{$karyawan->no_hp}}</td>
                        </tr>
                        <tr>
                            <th>
                                Username
                            </th>
                            <td>{{$karyawan->username}}</td>
                        </tr>
                        <tr>
                            <th>
                                Password
                            </th>
                            {{-- <td>{{$karyawan->password}}</td> --}}
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
