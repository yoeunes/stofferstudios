@extends('layouts.app')

@section('styles')
    <style>
        div.container { margin-top: 55px; }
    </style>
@endsection

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are on the Welcome page...
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
