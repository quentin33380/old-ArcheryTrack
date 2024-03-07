<x-admin-layout>
    <section id="gestion-users">
        <div class="tableau-users">
            <div class="section-title">
                <p>Liste des utilisateurs</p>
            </div>
            <div class="ajout-users">
                <a href="{{ route('admin.users.create') }}">Ajouter un utilisateur</a>
            </div>
            <div class="tableau">
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            @if($user->id !== auth()->user()->id) <!-- Exclure l'utilisateur actuel -->
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a href="{{route('admin.users.edit', $user->id)}}">Modifier</a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-admin-layout>
