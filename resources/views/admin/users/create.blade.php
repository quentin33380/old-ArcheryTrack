<x-admin-layout>
    <section id="gestion-users">
        <div class="tableau-users">
            <div class="section-title">
                <p>Ajouter un nouvel utilisateur</p>
            </div>
            <form method="POST" action="{{ route('admin.users.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" required>
                    <x-input-error :messages="$errors->get('name')" />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <x-input-error :messages="$errors->get('email')" />
                </div>

                <div class="form-group">
                    <label for="role">Rôle</label>
                    <select name="role" id="role">
                        @foreach(App\Enums\Role::cases() as $role)
                            <option value="{{ $role->value }}">{{ $role->displayName() }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('role')" />
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                    <x-input-error :messages="$errors->get('password')" />
                </div>

                <button type="submit" class="btn btn-primary">Créer</button>
            </form>
        </div>
    </section>
</x-admin-layout>
