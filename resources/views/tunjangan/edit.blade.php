@extends('layouts.template')

@section('tab')
    Edit Tunjangan
@endsection

@section('title')
    Edit Tunjangan
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
                    <form action="{{ route('tunjangan.update', $tunjangan->id) }}" method="POST">
                        @csrf

                        {{method_field('PUT')}}

                        <div class="modal-body">

                            <label for="" class="form-label text-lg">Nama Tunjangan</label>
                            <input class="form-control" name="nama_tunjangan" value="{{($tunjangan->nama_tunjangan) }}"
                                required type="text" id="" placeholder="Isi nama tunjangan">
                            <label for="" class="form-label">Nominal</label>
                            <input class="form-control" name="nominal" value="{{ ($tunjangan->nominal) }}" required
                                type="number" id="" placeholder="Isi nominal">

                        </div>
                        <div class="modal-footer">
                            <a href="{{route('tunjangan.index')}}" class="btn" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
