@extends('layouts.partial.layout-about-us')
<x-seo.meta
    title="{{ config2('moonshine.work.metatitle') }}"
    description="{{ config2('moonshine.work.description') }}"
    keywords="{{ config2('moonshine.work.keywords') }}"
/>
@section('content-about-us')
    <section class="trusted_protection">
        <div class="block relative">
            <x-content.trusted-protection2 />
        </div>
    </section>
    <section class="latest_insights">
        <div class="block relative">
            <x-content.our-values />
        </div>
    </section>
    <section class="content-website">
        <div class="block relative">

            <x-content.items-template3 :items="$items"  />


        </div>
    </section>
    <section class="vacancies">
        <div class="block relative">
            <x-content.vacancies />
        </div>
    </section>
@endsection

