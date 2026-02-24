@extends('layouts.partial.layout-blue')
<x-seo.meta
    title="{{ config2('moonshine.individual.metatitle') }}"
    description="{{ config2('moonshine.individual.description') }}"
    keywords="{{ config2('moonshine.individual.keywords') }}"
/>
<x-seo.title
    title_h1="{{ config2('moonshine.individual.title') }}"
    subtitle_div="{{ config2('moonshine.individual.subtitle') }}"
/>
@section('content-blue')
    <section class="content-website">
        <div class="block relative">
            <x-images.image
                :array="config2('moonshine.individual.temp_img')"
            />
                @if(config2('moonshine.individual.desc'))
                    <div class="description_1 desc">
                        {!!  config2('moonshine.individual.desc') !!}
                    </div>
                @endif
            <x-content.items-template :items="$items" route="for.individual"  />
                @if(config2('moonshine.individual.desc2'))
                    <div class="description_2 desc">
                        {!!  config2('moonshine.individual.desc2') !!}
                    </div>
                @endif
        </div>
    </section>

@endsection

