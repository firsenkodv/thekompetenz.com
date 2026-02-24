@extends('layouts.layout')
@section('content')
    @include('templates.axeld.header.header-template-blue') {{--все изменения для шаблона templates.axeld.header.header-template-blue -  это для  страниц с синим градиентом--}}
    @yield('content-blue')
@endsection

