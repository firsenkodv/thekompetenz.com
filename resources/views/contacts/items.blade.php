@extends('layouts.partial.layout-blue')

<x-seo.meta
    title="Contacts"
    description="Contacts"
    keywords="Contacts"
/>

<x-seo.title
    title_h1="Our offices"
/>

<x-seo.filter-contact
    :items="$items"
    :value="(isset($value)) ? $value : ''"
/>

@section('content-blue')

    <section class="content-website">
        <div class="block relative">
           <x-content.items-template5 :items="$items" />
        </div>
    </section>

@endsection
