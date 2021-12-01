@extends('layouts.template')

@section('tab')
    Edit Konten
@endsection

@section('title')
    Edit Konten
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
                    <form action="{{ route('konten.update', $konten->id) }}" method="POST">
                        @csrf

                        {{method_field('PUT')}}

                        <div class="modal-body">

                            <label for="" class="form-label text-lg">Judul konten</label>
                            <input class="form-control" name="judul_konten" value="{{($konten->judul_konten) }}"
                                required type="text" id="" placeholder="Isi judul konten">
                            <label for="" class="form-label">Isi konten</label>
                            <input class="form-control" name="isi_konten" value="{{ ($konten->isi_konten) }}" required
                                type="textarea" id="" placeholder="Isi konten">

                            <label for="" class="form-label">Penerbit</label>
                            <input class="form-control" name="penerbit" value="{{ ($konten->penerbit) }}" required
                                type="text" id="" placeholder="Isi gaji pokok">

                        </div>
                        <div class="modal-footer">
                            <a href="{{route('konten.index')}}" class="btn" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
