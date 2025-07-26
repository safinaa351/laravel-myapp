@props(['highlight' => false])

{{--the div always has class card, but sometimes has class of highlight when props value are true--}}
<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a {{$attributes}} class="btn"> View Details</a>

</div>