<x-admin-layout>
    <section id="gestion-articles">
        <div class="section-title">
            <h1>Liste des articles</h1>
        </div>
        <div>
            <a href="{{ route('admin.articles.create') }}">Créer un nouvel article</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Source</th>
                    <th>Catégories</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td><img src="{{ $article->image }}" alt="Image de l'article" width="100"></td>
                        <td>{{ $article->title }}</td>
                        <td><a href="{{ $article->source_url }}" target="_blank">Lien source</a></td>
                        <td>{{ implode(', ', $article->categories) }}</td>
                        <td>
                            <a href="{{ route('admin.articles.edit', $article) }}">Modifier</a>
                            <form action="{{ route('admin.articles.destroy', $article) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-admin-layout>
