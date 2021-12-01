@extends('layouts.template')

@section('tab')
    Detail Gaji
@endsection

@section('title')
    Detail Gaji
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <h4 class="">Data Karyawan</h4>
                    <table class="table table-hover mt-4">
                        <tr>
                            <th>
                                Nama Karyawan
                            </th>
                            <td>{{$karyawan->nama_karyawan}}</td>
                        </tr>
                        <tr>
                            <th>
                                Jabatan
                            </th>
                            <td>{{$karyawan->jabatan->nama_jabatan}}</td>
                        </tr>
                        <tr>
                            <th>
                                Status
                            </th>
                            <td>{{$karyawan->status}}</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <h4 class="">Riwayat Gaji</h4>
                    <table class="table table-hover mt-4">
                        <tr class="text-lg">
                            <th>Bulan</th>
                            <th>Jumlah Tunjangan</th>
                            <th>Jumlah Potongan</th>
                            <th>Total Gajian</th>
                        </tr>
                        @foreach ($gaji as $x)
                        <tr>
                            <td>{{$x->bulan_gajian}} / {{$x->tahun_gajian}} </td>
                            <td>Rp. {{number_format($x->potongan)}}</td>
                            <td>Rp. {{number_format($x->total_tunjangan)}}</td>
                            <td>Rp. {{number_format($x->total_gaji)}}</td>
                        </tr>
                        @endforeach

                    </table>
                </div>

            </div>
            <a href="{{route('gaji.index')}}" class=" mt-4 mb-4 btn btn-primary float-right">
                <i class="fas fa-backspace "></i>
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection
