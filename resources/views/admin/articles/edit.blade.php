<x-admin-layout>
    <section id="gestion-articles">
        <div class="tableau-articles">
            <div class="section-title">
                <p>Modification de l'article : {{ $article->title }}</p>
            </div>
            <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" id="title" name="title" value="{{ $article->title }}" required>
                    <x-input-error :messages="$errors->get('title')" />
                </div>

                <div class="form-group textaera-label">
                    <label for="content">Contenu</label>
                    <textarea id="content" name="content" required>{{ $article->content }}</textarea>
                    <x-input-error :messages="$errors->get('content')" />
                </div>

                <div class="form-group">
                    @if ($article->image)
                        <div class="current-img">
                            <p>Image actuelle</p>
                            <img src="{{ asset( $article->image) }}" width="100" alt="Image actuelle">
                        </div>
                    @endif
                    <label for="image">Changer l'image</label>
                    <input type="file" id="image" name="image">
                    <x-input-error :messages="$errors->get('image')" />
                </div>

                <div class="form-group">
                    <label for="source_url">URL Source</label>
                    <input type="url" id="source_url" name="source_url" value="{{ $article->source_url }}">
                    <x-input-error :messages="$errors->get('source_url')" />
                </div>

                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    </section>
</x-admin-layout>
