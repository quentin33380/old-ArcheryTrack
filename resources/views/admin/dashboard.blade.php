<x-admin-layout>
    <h1>Bienvenue sur votre dashboard
        @if (Auth::user()->hasRole('admin'))
            administrateur
        @else
            rédacteur
        @endif
    </h1>
    <p>Ici vous pourrez gerer vos <span class="@if(Auth::user()->hasRole('admin')) admin @else pas-vu @endif">utilisateur et vos</span> articles</p>
</x-admin-layout>
