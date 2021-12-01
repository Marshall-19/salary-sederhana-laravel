@extends('layouts.template')

@section('tab')
    Data Berita
@endsection

@section('title')
    Data Berita
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <!-- Button trigger modal -->
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-plus"></i>
                            Tambah
                        </a>

                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Tanggal Terbit</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($berita as $x)

                                    <tr>
                                        <th scope="row">{{$loop->iteration +($berita->perpage() * ($berita->currentPage() -1))}}</th>
                                        <td>{{ $x->judul_berita }}</td>
                                        <td>{{ date('d F Y',strtotime($x->tanggal_terbit)) }}</td>
                                        <td>{{ $x->penerbit }}</td>


                                        <td>
                                            <form action="{{ route('berita.destroy', $x->id) }}" method="POST">

                                                <a href="{{ route('berita.edit', $x->id) }}" class="btn btn-warning"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="{{ route('berita.show', $x->id) }}" class="btn btn-success"><i
                                                        class="fas fa-eye"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button  type="submit" onclick="return confirm('Are you sure to delete data {{$x->judul_berita}} ?')" class="btn btn-danger"><i class="fas fa-trash"></i></button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        {{ $berita->appends(Request::all())->links() }}
                    </div>
                </div>

            </div>

        </div>
        <!-- Modal Logout -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title" id="exampleModalLabel">Data Berita</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('berita.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">

                            <label for="" class="form-label text-lg">Judul Berita</label>
                            <input class="form-control" name="judul_berita" value="{{ old('judul_berita') }}"
                                required type="text" id="" placeholder="Isi judul">
                            <label for="" class="form-label">Isi Berita</label>
                            <textarea name="isi_berita" class="form-control" id="" cols="" rows="5"></textarea>
                            <label for="" class="form-label">Penerbit</label>
                            <input class="form-control" name="penerbit" value="{{ old('penerbit') }}" required
                                type="text" id="" placeholder="Isi Penerbit">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


