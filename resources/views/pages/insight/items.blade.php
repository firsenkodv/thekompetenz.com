@extends('layouts.partial.layout-blue')
<x-seo.meta
    title="{{ config2('moonshine.insight.metatitle') }}"
    description="{{ config2('moonshine.insight.description') }}"
    keywords="{{ config2('moonshine.insight.keywords') }}"
/>
<x-seo.title
    title_h1="{{ config2('moonshine.insight.title') }}"
    subtitle_div="{{ config2('moonshine.insight.subtitle') }}"
/>
@section('content-blue')
    <section class="content-website">
        <div class="block relative">
            <x-images.image
            :array="config2('moonshine.insight.temp_img')"
            />
                @if(config2('moonshine.insight.desc'))
                    <div class="description_1 desc">
                        {!!  config2('moonshine.insight.desc') !!}
                    </div>
                @endif
            <x-content.items-template2 :items="$items" route="for.insight"  />

                @if(config2('moonshine.insight.desc2'))
                    <div class="description_2 desc">
                        {!!  config2('moonshine.insight.desc2') !!}
                    </div>
                @endif
        </div>
    </section>
    <section class="vacancies">
        <div class="block relative">
            <x-content.vacancies />
        </div>
    </section>
@endsection

