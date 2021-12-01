@extends('layouts.template')

@section('tab')
    Detail Konten
@endsection

@section('title')
    Detail Konten
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <a href="{{route('konten.index')}}" class="btn btn-primary">
                        <i class="fas fa-backspace "></i>
                        Kembali
                    </a>
                    <table class="table table-hover mt-4">
                        <tr>
                            <th>
                                Judul konten
                            </th>
                            <td>{{$konten->judul_konten}}</td>
                        </tr>
                        <tr>
                            <th>
                                Tanggal Terbit
                            </th>
                            <td>{{date('Y M d', strtotime($konten->tanggal_terbit))}}</td>
                        </tr>
                        <tr>
                            <th>
                                Isi konten
                            </th>
                            <td>{{$konten->isi_konten}}</td>
                        </tr>
                        <tr>
                            <th>
                                Penerbit
                            </th>
                            <td>{{$konten->penerbit}}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
