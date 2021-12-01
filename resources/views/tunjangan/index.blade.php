@extends('layouts.template')

@section('tab')
    Data Tunjangan
@endsection

@section('title')
    Data Tunjangan
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil !</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
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
                                    <th scope="col">Tunjangan</th>
                                    <th scope="col">Nominal</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tunjangan as $x)

                                    <tr>
                                        <th scope="row">{{$loop->iteration +($tunjangan->perpage() * ($tunjangan->currentPage() -1))}}</th>
                                        <td>{{ $x->nama_tunjangan }}</td>
                                        <td>Rp . {{ number_format($x->nominal) }}</td>
                                        <td>
                                            <form action="{{ route('tunjangan.destroy', $x->id) }}" method="POST">

                                                <a href="{{ route('tunjangan.edit', $x->id) }}" class="btn btn-warning"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="{{ route('tunjangan.show', $x->id) }}" class="btn btn-success"><i
                                                        class="fas fa-eye"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure to delete data{{$x->nama_tunjangan}}')" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        {{ $tunjangan->appends(Request::all())->links() }}
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

                        <h4 class="modal-title" id="exampleModalLabel">Data Tunjangan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('tunjangan.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">

                            <label for="" class="form-label text-lg">Nama Tunjangan</label>
                            <input class="form-control" name="nama_tunjangan" value="{{ old('nama_tunjangan') }}"
                                required type="text" id="" placeholder="Isi nama tunjangan">
                            <label for="" class="form-label">Nominal</label>
                            <input class="form-control" name="nominal" value="{{ old('nominal') }}" required
                                type="number" id="" placeholder="Isi nominal">

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
