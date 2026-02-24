@extends('layouts.partial.layout-blue')
<x-seo.meta
    title=""
    description=""
    keywords=""
/>
<x-seo.title
    title_h1="Solutions"
/>
@section('content-blue')
    <section class="content-website">
        <div class="block relative">

            <x-content.items-templete4 :items="$categories" route="items.solutions" />

        </div>
    </section>

@endsection

