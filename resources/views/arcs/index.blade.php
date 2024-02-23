<x-app-layout>
    <div id="arc-profile">
        <h1 class="purple-pill">{{ $arc->name }}</h1>
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
