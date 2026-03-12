@extends('layouts.partial.layout-white')
<x-seo.meta
    title="{!! $item->metatitle ? $item->metatitle: $item->title !!}"
    description="{!!  $item->description ?? $item->title !!}"
    keywords="{!!  $item->keywords ?? $item->title !!}"
/>
@section('content-white')
    <section class="">
        <div class="block relative">
            <div class="with-840 desc pad_b40">
                <h1 class="title">{{ $item->title }}</h1>
                <div class="subtitle">{{ $item->subtitle }}</div>
                <br>
                @if($item->img)
                    <div class="pad_t10 pad_b10">
                        <img width="100%" src="{{Storage::url($item->img)}}" alt="{{ $item->title }}"
                             class="img-responsive">
                    </div>
                @endif

                {!! $item->desc !!}

                @if($item->img2)
                    <div class="pad_t10 pad_b10">
                        <img width="100%" src="{{Storage::url($item->img2)}}" alt="{{ $item->title }}"
                             class="img-responsive">
                    </div>
                @endif

                {!! $item->desc2 !!}

                @if($item->faq_title)
                    <div class="pad_t16">
                    <h2 class="_44">{{$item->faq_title}}</h2>
                    <div class="faq dark-blue">
                        <x-content.content-faq :item="$item"/>
                    </div>
                    </div>
                @endif
                <x-content.file-pdf :files="$item->files"/>

            </div>
        </div>
    </section>
    <section class="background_F5F5F5">
        <div class="block relative">
            <x-content.services-business/>
        </div>
    </section>
@endsection

