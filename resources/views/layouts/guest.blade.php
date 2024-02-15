<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/splide.js'])
        <script src="https://kit.fontawesome.com/de89977258.js" crossorigin="anonymous"></script>
        @livewireStyles
    </head>
    <body x-data="{open : false}" class="body-vitrine">
        <header class="vitrine-header">
            <div class="container">
                <nav class="main-menu" :class="{'container-nav': !open, 'container-open' : open}">
                    <a href="{{route('accueil')}}" class="logo">
                        <img src="{{asset('images/logo.svg')}}">
                        <p class="main-title">ArcheryTrack</p>
                    </a>
                    <ul class="nav-ul" id="menu-pc">
                        <x-nav-link link="accueil" route="{{route('accueil')}}">Accueil</x-nav-link>
                        <x-nav-link link="article" route="{{route('article')}}">Article</x-nav-link>
                        <x-nav-link link="contact" route="{{route('contact')}}">Contact</x-nav-link>
                        @if (auth()->check())
                            <x-nav-link link="dashboard" route="{{route('dashboard')}}">Profile</x-nav-link>
                        @else
                            <x-nav-link link="register" route="{{route('register')}}">Connexion / inscription</x-nav-link>
                        @endif
                    </ul>
                    <label class="hamburger" id="menuToggle">
                        <input type="checkbox" x-on:click="open = ! open">
                        <svg viewBox="0 0 32 32">
                            <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                            <path class="line" d="M7 16 27 16"></path>
                        </svg>
                    </label>
                </nav>
                <ul :class="{'nav': !open, 'nav-open' : open}" id="menu" x-show="open" x-cloak
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95">
                    <x-nav-link link="accueil" route="{{route('accueil')}}">Accueil</x-nav-link>
                    <x-nav-link link="article" route="{{route('article')}}">Article</x-nav-link>
                    <x-nav-link link="contact" route="{{route('contact')}}">Contact</x-nav-link>
                    <li>
                        @if (auth()->check())
                            <a href="{{route('dashboard')}}">Profile</a>
                        @else
                            <x-nav-link link="register" route="{{route('register')}}">Connexion / inscription</x-nav-link>
                        @endif
                    </li>
                </ul>
            </div>
        </header>

        {{ $slot }}

        <x-footer/>

        @livewireScriptConfig
    </body>
</html>
