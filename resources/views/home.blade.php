@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-7 mb-3">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-10 col-xl-7 mb-3">
                <passport-clients></passport-clients>
            </div>
            <div class="col-md-12 col-lg-10 col-xl-7 mb-3">
                <passport-personal-access-tokens></passport-personal-access-tokens>
            </div>
            <div class="col-md-12 col-lg-10 col-xl-7 mb-3">
                <passport-authorized-clients></passport-authorized-clients>
            </div>
        </div>
    </div>
@endsection
