@extends('layouts.partial.layout-white')
<x-seo.meta
    title="{{ $item->metatitle ?? $item->title }}"
    description="{{ $item->description ?? $item->title }}"
    keywords="{{ $item->keywords ?? $item->title }}"
/>
@section('content-white')
    <section class="">
        <div class="block relative">
            <x-content.item-template :item="$item" :route="route('for.individuals')" />
        </div>
    </section>
    <section class="background_F5F5F5">
        <div class="block relative">
            <x-content.services-business />
        </div>
    </section>
@endsection

