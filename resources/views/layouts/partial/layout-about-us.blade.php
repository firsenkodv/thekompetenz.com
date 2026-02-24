@extends('layouts.layout')
@section('content')
    @include('templates.axeld.header.header-template-about-us') {{--все изменения для шаблона templates.axeld.header.header-template-about-us -  это для  страницы с видео о компании--}}
    @yield('content-about-us')
@endsection

