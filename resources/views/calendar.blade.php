@extends('layouts.app')

@section('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css' />
    <link rel='stylesheet' media='print' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css' />
@endsection

@section('content')
    <calendar :user="{{ $user }}" :sessions="{{ $sessions }}"></calendar>
@endsection
