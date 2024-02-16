<section id="info-archer" class="section-form">
    <div>
        <div class="group-input-info">
            <div class="section-title">
                <p>Informations de base</p>
            </div>
            <div>
                <div class="input-label">
                    <label for="federation">Fédération</label>
                    <input type="text" wire:model.live.debounce.500ms="federation" />
                </div>
                <x-input-error :messages="$errors->get('federation')" />
            </div>
            <div>
                <div class="input-label">
                    <label for="license_number">Numéro de licence</label>
                    <input type="text" wire:model.live.debounce.500ms="license_number" />
                </div>
                <x-input-error :messages="$errors->get('licence_number')" />
            </div>
        </div>
        <div class="group-input-info">
            <div class="oeil-directeur">
                <p>Oeil directeur</p>
                <div class="radio-input">
                    <div class="input-label">
                        <input type="radio" id="eye_director" wire:model.live.debounce.250ms="eye_director" value="0" {{ $eye_director == false ? 'checked' : '' }}>
                        <label for="eye_director">Droite</label>
                    </div>
                    <div class="input-label">
                        <input type="radio" id="eye_director_left" wire:model.live.debounce.250ms="eye_director" value="1" {{ $eye_director == true ? 'checked' : '' }}>
                        <label for="eye_director_left">Gauche</label>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('eye_director')" />
            </div>
            <div>
                <div class="input-label">
                    <label for="elongate">Allonge</label>
                    <input type="number" name="allonge" min="0" id="elongate" wire:model.live.debounce.500ms="elongate">
                </div>
                <x-input-error :messages="$errors->get('elongate')" />
            </div>
        </div>
    </div>
</section>
