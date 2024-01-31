<x-guest-layout>
    <section id="contact" class="container">
        <form action="#" method="GET">
            @csrf
            <div class="contact-card">
                <div class="card">
                    <div class="purple-card-title left">
                        <h2>Formulaire de contact</h2>
                    </div>
                    <div class="purple-card">
                        <div class="form-container">
                            <div class="form-group">
                                <div class="input-group">
                                    <label for="name">Nom</label>
                                    <input type="text" name="name" id="name">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="input-group">
                                    <label for="mail">E-mail de contact</label>
                                    <input type="text" name="mail" id="mail">
                                    <x-input-error :messages="$errors->get('mail')" class="mt-2" />
                                </div>
                                <div class="input-group">
                                    <label for="object">Objet</label>
                                    <input type="text" name="object" id="object">
                                    <x-input-error :messages="$errors->get('object')" class="mt-2" />
                                </div>
                                <div class="input-group">
                                    <label for="demande">Votre demande</label>
                                    <textarea name="demande" id="demande"></textarea>
                                </div>
                            </div>
                            <button type="submit">Envoyer</button>
                        </div>
                    </div>
                </div>
            <div>
        </form>
    </section>
</x-guest-layout>
