@extends('layouts.partial.layout-home')
<x-seo.meta
    title="{!!  (config2('moonshine.home.metatitle')) !!}"
    description="{!!  (config2('moonshine.home.description')) !!}"
    keywords="{!!  (config2('moonshine.home.keywords'))  !!}"
/>
@section('content-home')
    <section class="trusted_protection">
        <div class="block relative">
            <x-content.trusted-protection />
        </div>
    </section>
    <section class="">
        <div class="block relative">
            <x-content.services-business />
        </div>
    </section>
    <section class="latest_insights">
        <div class="block relative">
            <x-content.latest-insights />
        </div>
    </section>

    <section class="">
        <div class="block relative">
            <x-content.personal-profile />
        </div>
    </section>
    <section class="vacancies">
        <div class="block relative">
            <x-content.vacancies />
        </div>
    </section>
@endsection
