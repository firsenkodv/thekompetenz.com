@extends('layouts.partial.layout-blue')
<x-seo.meta
    title="Contacts"
    description="Contacts"
    keywords="Contacts"
/>
<x-seo.title
    title_h1="Our offices"
/>
<x-seo.filter-contact :items="$items" />

@section('content-blue')
    <section class="content-website">
        <div class="block relative">

<x-content.items-template5 :items="$items" />
        </div>
    </section>
    <script type="text/javascript" src="//api-maps.yandex.ru/2.1/?apikey=43db27ba-be61-4e84-b139-ff37ad4802b8&package.standard&lang=ru_RU"></script>
@endsection

