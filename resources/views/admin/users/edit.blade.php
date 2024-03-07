<x-admin-layout>
    <section id="gestion-users">
        <div class="tableau-users">
            <div class="section-title">
                <p>Modification de {{$user->name}}</p>
            </div>
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <label for="name">Nom:</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}" required>
                    <x-input-error :messages="$errors->get('name')" />
                </div>

                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" required>
                    <x-input-error :messages="$errors->get('email')" />
                </div>

                <div>
                    <label for="role">Rôle:</label>
                    <select id="role" name="role">
                        @foreach(App\Enums\Role::cases() as $role)
                            <option value="{{ $role->value }}" @selected($user->role === $role->value)>{{ $role->displayName() }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('role')" />
                </div>

                <button type="submit">Mettre à jour</button>
            </form>
        </div>
    </section>
</x-admin-layout>
