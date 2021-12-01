@extends('layouts.template')

@section('tab')
    Edit Berita
@endsection

@section('title')
    Edit Berita
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
                    <form action="{{ route('berita.update', $berita->id) }}" method="POST">
                        @csrf

                        {{method_field('PUT')}}

                        <div class="modal-body">

                            <label for="" class="form-label text-lg">Judul Berita</label>
                            <input class="form-control" name="judul_berita" value="{{($berita->judul_berita) }}"
                                required type="text" id="" placeholder="Isi judul berita">
                            <label for="" class="form-label">Isi Berita</label>
                            <input class="form-control" name="isi_berita" value="{{ ($berita->isi_berita) }}" required
                                type="textarea" id="" placeholder="Isi berita">

                            <label for="" class="form-label">Penerbit</label>
                            <input class="form-control" name="penerbit" value="{{ ($berita->penerbit) }}" required
                                type="text" id="" placeholder="Isi gaji pokok">

                        </div>
                        <div class="modal-footer">
                            <a href="{{route('berita.index')}}" class="btn" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
