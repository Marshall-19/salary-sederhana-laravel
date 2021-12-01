@extends('layouts.template')

@section('tab')
    Detail Jabatan
@endsection

@section('title')
    Detail Jabatan
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <a href="{{route('jabatan.index')}}" class="btn btn-primary">
                        <i class="fas fa-backspace "></i>
                        Kembali
                    </a>
                    <table class="table table-hover mt-4">
                        <tr>
                            <th>
                                Nama Jabatan
                            </th>
                            <td>{{$jabatan->nama_jabatan}}</td>
                        </tr>
                        <tr>
                            <th>
                                Nominal
                            </th>
                            <td>Rp. {{number_format($jabatan->gaji_pokok)}},-</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
