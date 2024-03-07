<x-admin-layout>
    <section id="ajout-article">
        <h1>Ajouter un nouvel article</h1>
        <form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Titre</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div>
                <label for="content">Contenu</label>
                <textarea id="content" name="content" required></textarea>
            </div>

            <div>
                <label for="image">Image</label>
                <input type="file" id="image" name="image">
            </div>

            <div>
                <label for="source_url">Lien source</label>
                <input type="url" id="source_url" name="source_url">
            </div>

            <div>
                <label for="categories">Catégories</label>
                <select id="categories" name="categories[]" multiple>
                    <option value="Type d'arc">Type d'arc</option>
                    <option value="Expérience">Expérience</option>
                    <option value="Type de tir">Type de tir</option>
                </select>
            </div>

            <button type="submit">Créer l'article</button>
        </form>
    </section>
</x-admin-layout>
