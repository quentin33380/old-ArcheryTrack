<x-admin-layout>
    <section id="gestion-articles">
        <div class="tableau-users">
            <div class="section-title">
                <p>Liste des articles</p>
            </div>
            <div class="ajout-articles">
                <a href="{{ route('admin.articles.create') }}">Créer un nouvel article</a>
            </div>
            <div class="tableau">
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Source</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>
                                    @if($article->image)
                                        <img src="{{ asset($article->image) }}" alt="Image de l'article" width="100">
                                    @else
                                        Pas d'image
                                    @endif
                                </td>
                                <td>{{ $article->title }}</td>
                                <td class="lien-source">
                                    <a href="{{ $article->source_url }}" target="_blank">{{ $article->source_url }}</a>
                                </td>
                                <td class="td-action">
                                    <div>
                                        <a href="{{ route('admin.articles.edit', $article) }}">Modifier</a>
                                        <form action="{{ route('admin.articles.destroy', $article) }}" method="POST">
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
