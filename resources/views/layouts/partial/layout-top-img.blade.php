@extends('layouts.layout')
@section('content')
    @include('templates.axeld.header.header-template-top-img') {{--все изменения для шаблона templates.axeld.header.header-template-top-img -  это для  страницы с большой картинкой--}}
    @yield('content-top-img')
@endsection

