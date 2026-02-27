@props([
    'route' => '#',
])
@if($item->img2)
    <div class="img2 template2_img">
        <img width="100%" src="{{ asset(intervention('1360x500', $item->img2, 'pages/intervention')) }}"
             alt="{{ $item->title }}" loading="lazy"/>
    </div>
@endif
<div class="content_item-template content_item-template2">

    <div class="content_item__flex">
        <div class="content_item__left">
            <div class="content_item__back">
                <a href="{{ $route }}"><img alt="back" width="19" height="12" loading="lazy"
                                            src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjIiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAyMiAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTYuODQ1MjQgMTIuOTg0N0wwLjc1IDYuODg5NDNNMC43NSA2Ljg4OTQzTDYuODQ1MjQgMC43NU0wLjc1IDYuODg5NDNMMjAuNTU5NSA2Ljg4OTQzIiBzdHJva2U9IiM2RTZFNkUiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPC9zdmc+Cg=="><span>{{ $item->back }}</span></a>
            </div>
            <div class="content_social__zone">
                <x-social.social-zone
                    facebook="{{ route(Route::current()->getName(), $item->slug) }}"
                    vk="{{ route(Route::current()->getName(), $item->slug) }}"
                    x="{{ route(Route::current()->getName(), $item->slug) }}"
                    whatsapp="{{ route(Route::current()->getName(), $item->slug) }}"
                    instagram="{{ route(Route::current()->getName(), $item->slug) }}"
                    tik_tok="{{ route(Route::current()->getName(), $item->slug) }}"
                />
            </div>

            <div class="little_title">{{ $item->slogan }}</div>
            <h1 class="_44">{{ $item->title }}</h1>
            <div class="business_subtitle">{{ $item->subtitle }}</div>
            <div class="description_1 desc dark-blue">
                {!! $item->desc !!}
            </div>

        </div>
        <div class="content_item__right">

            <div class="description_2 desc dark-blue">
                {!! $item->desc2 !!}
            </div>
            <x-content.file-pdf :files="$item->files" />


        </div>
    </div>
    @if($item->form)
        <div class="content_item__flex apply_auto_insurance">
            <div class="content_item__left">
                <h2 class="_44">Apply for auto insurance</h2>
            </div>
            <div class="content_item__right">
                <div class="dark-blue ">
                    <x-form.business.business-feedback-form
                        :route="route('feedback.form.business')"
                        :type="$feedBackForm" />

                </div>
            </div>
        </div>
    @endif
    @if($item->faq_title)
        <div class="content_item__flex">
            <div class="content_item__left">
                <h2 class="_44">{{$item->faq_title}}</h2>
            </div>
            <div class="content_item__right">
                <div class="faq dark-blue">
                    <x-content.content-faq :item="$item"/>
                </div>
            </div>
        </div>
    @endif

</div>
