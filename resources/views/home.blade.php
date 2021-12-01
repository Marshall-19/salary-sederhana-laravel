@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                    <div class="jumbotron p-4 rounded jumbotron-fluid">
                        <div class="">
                          <h1 class="display-4">Dashboard</h1>
                          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
