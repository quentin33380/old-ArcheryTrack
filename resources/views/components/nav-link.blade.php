@props([
    'class' => '',
    'link' => '',
    'route' => '',
    'sousMenus' => false,
    'isActive' => request()->routeIs($link),
])

<li x-data="{ open: false }" x-bind:class=" { 'isActived': @js($isActive) }">
    <a href="{{$route}}" x-on:click="open = !open" class="{{ $class }} {{ request()->routeIs($link) ? ' actived' : '' }}">
        {{ $slot }}
    </a>
</li>
