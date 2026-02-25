@extends('layouts.partial.layout-top-img')
<x-seo.meta
    title="Solutions"
    description="Solutions - Technology, Media & Telecommunications"
    keywords="Solutions"
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
            <div class="title"><h1>{{ $solution_category->title }}</h1></div>
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
            </div>
        </div>
    </section>

@endsection

