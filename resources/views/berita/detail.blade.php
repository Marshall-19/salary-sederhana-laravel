@extends('layouts.template')

@section('tab')
    Detail Berita
@endsection

@section('title')
    Detail Berita
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <a href="{{route('berita.index')}}" class="btn btn-primary">
                        <i class="fas fa-backspace "></i>
                        Kembali
                    </a>
                    <table class="table table-hover mt-4">
                        <tr>
                            <th>
                                Judul berita
                            </th>
                            <td>{{$berita->judul_berita}}</td>
                        </tr>
                        <tr>
                            <th>
                                Tanggal Terbit
                            </th>
                            <td>{{date('Y M d', strtotime($berita->tanggal_terbit))}}</td>
                        </tr>
                        <tr>
                            <th>
                                Isi Berita
                            </th>
                            <td>{{$berita->isi_berita}}</td>
                        </tr>
                        <tr>
                            <th>
                                Penerbit
                            </th>
                            <td>{{$berita->penerbit}}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
