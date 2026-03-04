@extends('layouts.partial.layout-blue')
<x-seo.meta
    title="Solutions"
    description="Solutions - Technology, Media & Telecommunications"
    keywords="Solutions"
/>
<x-seo.title
    title_h1="Solutions"
/>
<x-seo.filter-solution
    :items="$categories"
    :value_sorting="(isset($value_sorting)) ? $value_sorting : ''"
    :value_tag="(isset($value_tag)) ? $value_tag : ''"
/>
@section('content-blue')
    <section class="content-website">
        <div class="block relative">
            <x-content.items-template4 :items="$categories" route="items.solutions" />
        </div>
    </section>
@endsection

