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
            <x-content.items-template5 :items="$items"/>
        </div>
        <div class="block relative">
            <div class="content_item-template">
                <div class="content_item__flex apply_auto_insurance">
                    <div class="content_item__left">
                        <h2 class="_44">Message Form</h2>
                    </div>
                    <div class="content_item__right">
                        <div class="dark-blue ">
                    {{--        <x-form.contact.main-contact-feedback-form
                                :route="route('feedback.form.contacts')"
                                />--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
