<div>
    <nav class="client-nav">
        <p>Navigation</p>
        <ul>
            <x-nav-link route="{{route('admin.dashboard')}}" link="dashboard">Tableau de board</x-nav-link>
            @if (Auth::user()->hasRole('admin'))
                <x-nav-link route="{{route('admin.users.index')}}" link="users">Utilisateurs</x-nav-link>
            @endif
            <x-nav-link route="" link="">Articles</x-nav-link>
            <x-nav-link route="{{route('dashboard')}}" link="user">Retour au pannel utilisateur</x-nav-link>
        </ul>
    </nav>
</div>
