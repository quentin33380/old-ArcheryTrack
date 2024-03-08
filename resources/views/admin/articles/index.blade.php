<x-admin-layout>
    <section id="gestion-users">
        <div class="tableau-users">
            <div class="section-title">
                <p>Liste des articles</p>
            </div>
            <div class="ajout-users">
                <a href="{{ route('admin.articles.create') }}">Créer un nouvel article</a>
            </div>
            <div class="tableau">
                <table>
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Image</th>
                            <th>Categories</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->title }}</td>
                                <td>
                                    @if ($article->image == null)
                                        <p>Pas d'images selectionné pour cet article</p>
                                        @else
                                        <img src="/images/{{ $article->image }}" width="100">
                                    @endif
                                </td>
                                <td>{{ $article->categories->pluck('name')->implode(', ') }}</td>
                                <td class="td-action">
                                    <div>
                                        <a href="{{ route('admin.articles.edit', $article->id) }}">Éditer</a>
                                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Supprimer</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-admin-layout>
