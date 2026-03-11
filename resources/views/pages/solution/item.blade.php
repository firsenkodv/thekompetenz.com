@extends('layouts.partial.layout-top-img')
<x-seo.meta
    title="{{ $solution_item->metatitle ?? $solution_item->title }}"
    description="{{ $solution_item->description ?? $solution_item->title }}"
    keywords="{{ $solution_item->keywords ?? $solution_item->title }}"
/>
<x-seo.title
    title_h1="Solutions"
/>
<x-seo.img
    :top_img="$solution_category->img2"
/>
@section('solution_category')
    <div class="solution_category">
        <div class="with-840">
            <div class="subtitle">{{ $solution_category->subtitle }}</div>
            <div class="title"><h1><a style="color: #fff; text-decoration: none" href="{{ route('items.solutions', $solution_category->slug) }}">{{ $solution_category->title }}</a></h1></div>
            <div class="short_desc">{{ $solution_category->short_desc }}</div>
        </div>
    </div>
@endsection
@section('content-top-img')

    <section class="">
        <div class="relative">
            <x-menu.menu-horizontal :items="$solution_category->solutionItems" route="item.solutions"/>
        </div>
    </section>

    <section class="content-website">
        <div class="block relative">
            <div class="with-840">
                <div class="desc solution_item">{!! $solution_item->desc !!}</div>
                <x-content.file-pdf :files="$solution_item->files"/>
                <div class="desc solution_item">{!! $solution_item->desc2 !!}</div>
            </div>
        </div>
    </section>

@endsection

