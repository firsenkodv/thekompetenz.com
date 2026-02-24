@props([
    'top_img'
])
{{--@if($top_img)
    @php
        $top_img =  '<img src="'.Storage::url($top_img).'" loading="lazy" alt="" class="seo_img" />';
    @endphp
@endif--}}
@section('top_img', $top_img)
