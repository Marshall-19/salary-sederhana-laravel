@extends('layouts.template')

@section('tab')
    Detail Tunjangan
@endsection

@section('title')
    Detail Tunjangan
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <a href="{{route('tunjangan.index')}}" class="btn btn-primary">
                        <i class="fas fa-backspace "></i>
                        Kembali
                    </a>
                    <table class="table table-hover mt-4">
                        <tr>
                            <th>
                                Nama Tunjangan
                            </th>
                            <td>{{$tunjangan->nama_tunjangan}}</td>
                        </tr>
                        <tr>
                            <th>
                                Nominal
                            </th>
                            <td>Rp. {{number_format($tunjangan->nominal)}},-</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
