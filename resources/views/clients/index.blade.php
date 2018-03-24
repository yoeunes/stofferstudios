@extends('layouts.app')

@section('content')
	<clients :user="{{ $user }}" :clients="{{ $clients }}"></clients>
@endsection
