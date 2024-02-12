<x-guest-layout>

    <section id="register" class="container">
        <div class="card-register">
            <h2>Bienvenue sur l’espace connexion/inscription</h2>
            <p>Ici vous pouvez vous connecter ou vous inscrire pour avoir acces a votre espace personnel pour&nbsp;:</p>
            <ul>
                <li>Suivre votre progression </li>
                <li>Définir des objectifs personnels</li>
                <li>Suivre vos réglages</li>
                <li>Gestion de feuilles de marques</li>
                {{-- #todo a enlever si il y a pas de cloud --}}
                {{-- <li>Avoir un cloud pour vos photos ou vos feuilles de marques</li> --}}
            </ul>
        </div>
    </section>

    <section id="formulaires" class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="formulaires-card">
                <div class="purple-card-title left">
                    <h2>Connexion</h2>
                </div>
                <div class="purple-card">
                    <div>
                        <div class="form-group">
                            <label for="email">E-mail de connexion</label>
                            <input type="email" name="email" id="email">
                            <x-input-error :messages="$errors->get('email')"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password-connexion">
                            <x-input-error :messages="$errors->get('password-connexion')"/>
                        </div>
                        <div>
                            <a href="#todo">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    <button type="submit" class="button-connexion">Connexion</button>
                </div>
            </div>
        </form>

        <div class="separator-y"></div>
        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="formulaires-card">
                <div class="purple-card-title right">
                    <h2>Insription</h2>
                </div>
                <div class="purple-card">
                    <div>
                        <div class="form-group">
                            <label for="name">Nom d’utilisateur</label>
                            <input type="text" name="name" id="name">
                            <x-input-error :messages="$errors->get('name')"/>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email">
                            <x-input-error :messages="$errors->get('email')"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password">
                            <x-input-error :messages="$errors->get('password')"/>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirmation du mot de passe</label>
                            <input type="password" name="password_confirmation" id="password_confirmation">
                            <x-input-error :messages="$errors->get('password_confirmation')"/>
                        </div>
                    </div>
                    <button type="submit" class="button-inscription">Inscription</button>
                </div>
            </div>
        </form>
    </section>
</x-guest-layout>
