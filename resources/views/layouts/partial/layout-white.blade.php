@extends('layouts.layout')
@section('content')
    @include('templates.axeld.header.header-template-white') {{--все изменения для шаблона templates.axeld.header.header-template-white -  это для  страниц с ,белым фоном--}}
    @yield('content-white')
@endsection

