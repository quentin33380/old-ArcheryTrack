<x-app-layout>
    <div id="arc-profile">
        <div class="header-profile">
            <h1 class="purple-pill">{{ $arc->name }}</h1>
            <form action="{{ route('arcs.destroy', $arc->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete">Supprimer le profil d'arc</button>
            </form>
        </div>
        <div>
            <section id="arc-config">
                <h2 class="purple-pill">Réglages simples</h2>
                <div>
                    @livewire('arc.arc-config', ['arc_id' => $arc->id])
                </div>
            </section>
            <section>
                <h2 class="purple-pill">Réglages avancés</h2>
                <div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
