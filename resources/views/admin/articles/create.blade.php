<x-admin-layout>
    <section id="gestion-users">
        <div class="tableau-users">
            <div class="section-title">
                <p>Ajouter un nouvel article</p>
            </div>
            <form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" id="title" name="title" required>
                    <x-input-error :messages="$errors->get('title')" />
                </div>

                <div class="form-group textaera-label">
                    <label for="content">Contenu</label>
                    <textarea id="content" name="content" required></textarea>
                    <x-input-error :messages="$errors->get('content')" />
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image">
                    <x-input-error :messages="$errors->get('image')" />
                </div>

                <div class="form-group">
                    <label for="source_url">URL Source</label>
                    <input type="url" id="source_url" name="source_url">
                    <x-input-error :messages="$errors->get('source_url')" />
                </div>

                <button type="submit" class="btn btn-primary">Créer</button>
            </form>
        </div>
    </section>
</x-admin-layout>
