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
                    <div class="form-group">
                        <label for="mail">E-mail de connexion</label>
                        <input type="text" name="mail" id="mail">
                        <x-input-error :messages="$errors->get('mail')" class="mt-2" />
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="text" name="password" id="password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
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

                </div>
            </div>
        </form>
    </section>
</x-guest-layout>
