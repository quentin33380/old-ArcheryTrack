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
                <li>Avoir un cloud pour vos photos ou vos feuilles de marques</li>
            </ul>
        </div>
    </section>

    <section id="formulaires" class="container">
        <form method="POST" action="">
            @csrf
            <div class="formulaires-card">
                <div class="purple-card-title left">
                    <h2>Connexion</h2>
                </div>
                <div class="purple-card">
                    <div>
                        <div class="form-group">
                            <label for="mail">E-mail de connexion</label>
                            <input type="email" name="mail" id="mail">
                            <x-input-error :messages="$errors->get('mail')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
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
        <form method="POST" action="">
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
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="mail">E-mail</label>
                            <input type="email" name="mail" id="mail">
                            <x-input-error :messages="$errors->get('mail')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirmation du mot de passe</label>
                            <input type="password" name="confirm-password" id="confirm-password">
                            <x-input-error :messages="$errors->get('confirm-password')" class="mt-2" />
                        </div>
                    </div>
                    <button type="submit" class="button-inscription">Inscription</button>
                </div>
            </div>
        </form>
    </section>
</x-guest-layout>
