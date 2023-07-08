@props(['name','href'])


@php
    $classes = $name == \Illuminate\Support\Facades\Route::currentRouteName()? 'nav-item active'
    : 'nav-item';

@endphp

<li {{ $attributes->merge(['class'=> $classes]) }}>
    <a class="nav-link" href={{$href}}>{{ $slot }}</a>
</li>
