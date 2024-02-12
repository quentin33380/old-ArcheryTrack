<nav class="client-nav">
    <p>Navigation</p>
    <ul>
        <x-nav-link link="dashboard" route="{{'dashboard'}}">Mon profil</x-nav-link>
        <x-nav-link
                link="mon-arc"
                route="#"
                :sousMenus="[
                    ['link' => 'profil-arc-1', 'nom' => 'Nom n°1'],
                    ['link' => 'profil-arc-2', 'nom' => 'Nom n°2'],
                    ['link' => 'ajouter-arc', 'nom' => '+ Ajouter un arc '],
                ]"
            >
                Mon arc
        </x-nav-link>
        <x-nav-link>Mes fleches</x-nav-link>
        <x-nav-link>Mes entrainements</x-nav-link>
        <x-nav-link>Mes feuilles de marques</x-nav-link>
    </ul>
</nav>
