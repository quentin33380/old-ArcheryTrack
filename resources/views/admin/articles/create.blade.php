<x-admin-layout>
    <form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
        @csrf
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" required>

        <label for="content">Contenu :</label>
        <textarea id="content" name="content" required></textarea>

        <label for="image">Image :</label>
        <input type="file" id="image" name="image">

        <label for="source_url">URL Source :</label>
        <input type="url" id="source_url" name="source_url">

        <label for="categories">Catégories :</label>
        <select name="categories[]" id="categories" multiple>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="new_category">Ajouter une nouvelle catégorie :</label>
        <input type="text" id="new_category" name="new_category">

        <button type="submit">Créer</button>
    </form>
</x-admin-layout>
