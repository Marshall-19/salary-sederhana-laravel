@extends('layouts.template')

@section('tab')
    Edit Jabatan
@endsection

@section('title')
    Edit Jabatan
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
                    <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
                        @csrf

                        {{method_field('PUT')}}

                        <div class="modal-body">

                            <label for="" class="form-label text-lg">Nama Jabatan</label>
                            <input class="form-control" name="nama_jabatan" value="{{($jabatan->nama_jabatan) }}"
                                required type="text" id="" placeholder="Isi nama jabatan">
                            <label for="" class="form-label">Gaji pokok</label>
                            <input class="form-control" name="gaji_pokok" value="{{ ($jabatan->gaji_pokok) }}" required
                                type="number" id="" placeholder="Isi gaji pokok">

                        </div>
                        <div class="modal-footer">
                            <a href="{{route('jabatan.index')}}" class="btn" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
