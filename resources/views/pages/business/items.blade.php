@extends('layouts.partial.layout-blue')
<x-seo.meta
    title="{{ config2('moonshine.business.metatitle') }}"
    description="{{ config2('moonshine.business.description') }}"
    keywords="{{ config2('moonshine.business.keywords') }}"
/>
<x-seo.title
    title_h1="{{ config2('moonshine.business.title') }}"
    subtitle_div="{{ config2('moonshine.business.subtitle') }}"
/>
@section('content-blue')
    <section class="content-website">
        <div class="block relative">
            <x-images.image
                :array="config2('moonshine.business.temp_img')"
            />
            @if(config2('moonshine.business.desc'))
                <div class="description_1 desc">
                    {!!  config2('moonshine.business.desc') !!}
                </div>
            @endif
            <x-content.items-template :items="$items" route="for.business"  />

                @if(config2('moonshine.business.desc2'))
                    <div class="description_2 desc">
                        {!!  config2('moonshine.business.desc2') !!}
                    </div>
                @endif
        </div>
    </section>

@endsection

