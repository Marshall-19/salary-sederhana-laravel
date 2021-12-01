@extends('layouts.template')

@section('tab')
    Data Gaji
@endsection

@section('title')
    Data Gaji
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <!-- Button trigger modal -->


                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Karyawan</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($karyawan as $x)

                                    <tr>
                                        <th scope="row">
                                            {{ $loop->iteration + $karyawan->perpage() * ($karyawan->currentPage() - 1) }}
                                        </th>

                                        <td>{{ $x->nama_karyawan }}</td>
                                        <td>{{ $x->jabatan->nama_jabatan }}</td>
                                        <td>
                                            @if ($x->status == 'tetap')

                                            <span class="badge badge-success" style="">Tetap</span>
                                            @elseif ($x->status == 'magang')
                                            <span class="badge badge-danger" style="">Magang</span>
                                            @elseif ($x->status == 'kontrak')
                                            <span class="badge badge-primary" style="">Kontrak</span>
                                        @endif</td>
                                        </td>


                                        <td>
                                            <a href="/tambah-gaji/{{$x->id}}" class="btn btn-primary"><i class="fa fa-exchange-alt"></i></a>
                                            <a href="/show-gaji/{{$x->id}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        {{ $karyawan->appends(Request::all())->links() }}
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

                        <h4 class="modal-title" id="exampleModalLabel">Data Gaji</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
