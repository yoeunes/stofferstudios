@extends('layouts.app')

@section('content')
	<leads :user="{{ $user }}" :leads="{{ $leads }}"></leads>
@endsection
