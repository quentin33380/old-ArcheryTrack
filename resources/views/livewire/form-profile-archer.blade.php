<section id="info-archer" class="section-form">
    <div>
        <div class="group-input-info">
            <div class="section-title">
                <p>Informations de base</p>
            </div>
            <div>
                <div class="input-label">
                    <label for="federation">Fédération</label>
                    <div class="input-svg">
                        <input type="text" wire:model.live.debounce.500ms="federation" />
                        @if (array_key_exists('federation', $inputModified) && $inputModified['federation'])
                            <div>
                                <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 3.33333V13.3333C15 13.7917 14.8369 14.1842 14.5108 14.5108C14.1847 14.8375 13.7922 15.0006 13.3333 15H1.66667C1.20833 15 0.816111 14.8369 0.49 14.5108C0.163889 14.1847 0.000555556 13.7922 0 13.3333V1.66667C0 1.20833 0.163333 0.816111 0.49 0.49C0.816667 0.163889 1.20889 0.000555556 1.66667 0H11.6667L15 3.33333ZM7.5 12.5C8.19444 12.5 8.78472 12.2569 9.27083 11.7708C9.75694 11.2847 10 10.6944 10 10C10 9.30555 9.75694 8.71528 9.27083 8.22917C8.78472 7.74305 8.19444 7.5 7.5 7.5C6.80556 7.5 6.21528 7.74305 5.72917 8.22917C5.24306 8.71528 5 9.30555 5 10C5 10.6944 5.24306 11.2847 5.72917 11.7708C6.21528 12.2569 6.80556 12.5 7.5 12.5ZM2.5 5.83333H10V2.5H2.5V5.83333Z" fill="#fff"/>
                                    <path d="M19.4498 5.13622L14.8856 11.071L13.5502 9.33447C13.3583 9.0849 13.0987 8.94825 12.787 8.94825C12.4753 8.94825 12.2157 9.0849 12.0238 9.33447C11.8352 9.5797 11.75 9.88179 11.75 10.2216C11.75 10.5614 11.8352 10.8634 12.0238 11.1087L14.1225 13.8375C14.3191 14.0933 14.5749 14.25 14.8856 14.25C15.1964 14.25 15.4522 14.0933 15.6488 13.8375L20.9762 6.91042C21.1648 6.6652 21.25 6.36311 21.25 6.02332C21.25 5.68353 21.1648 5.38145 20.9762 5.13622C20.7843 4.88665 20.5247 4.75 20.213 4.75C19.9013 4.75 19.6417 4.88665 19.4498 5.13622Z" fill="#06D727" stroke="white" stroke-width="0.5"/>
                                </svg>
                            </div>
                        @endif
                    </div>
                    <x-input-error :messages="$errors->get('federation')" />
                </div>
            </div>
            <div class="input-label">
                <label for="license_number">Numéro de licence</label>
                <div class="input-svg">
                    <input type="text" wire:model.live.debounce.500ms="license_number" />
                    @if (array_key_exists('license_number', $inputModified) && $inputModified['license_number'])
                        <div>
                            <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 3.33333V13.3333C15 13.7917 14.8369 14.1842 14.5108 14.5108C14.1847 14.8375 13.7922 15.0006 13.3333 15H1.66667C1.20833 15 0.816111 14.8369 0.49 14.5108C0.163889 14.1847 0.000555556 13.7922 0 13.3333V1.66667C0 1.20833 0.163333 0.816111 0.49 0.49C0.816667 0.163889 1.20889 0.000555556 1.66667 0H11.6667L15 3.33333ZM7.5 12.5C8.19444 12.5 8.78472 12.2569 9.27083 11.7708C9.75694 11.2847 10 10.6944 10 10C10 9.30555 9.75694 8.71528 9.27083 8.22917C8.78472 7.74305 8.19444 7.5 7.5 7.5C6.80556 7.5 6.21528 7.74305 5.72917 8.22917C5.24306 8.71528 5 9.30555 5 10C5 10.6944 5.24306 11.2847 5.72917 11.7708C6.21528 12.2569 6.80556 12.5 7.5 12.5ZM2.5 5.83333H10V2.5H2.5V5.83333Z" fill="#fff"/>
                                <path d="M19.4498 5.13622L14.8856 11.071L13.5502 9.33447C13.3583 9.0849 13.0987 8.94825 12.787 8.94825C12.4753 8.94825 12.2157 9.0849 12.0238 9.33447C11.8352 9.5797 11.75 9.88179 11.75 10.2216C11.75 10.5614 11.8352 10.8634 12.0238 11.1087L14.1225 13.8375C14.3191 14.0933 14.5749 14.25 14.8856 14.25C15.1964 14.25 15.4522 14.0933 15.6488 13.8375L20.9762 6.91042C21.1648 6.6652 21.25 6.36311 21.25 6.02332C21.25 5.68353 21.1648 5.38145 20.9762 5.13622C20.7843 4.88665 20.5247 4.75 20.213 4.75C19.9013 4.75 19.6417 4.88665 19.4498 5.13622Z" fill="#06D727" stroke="white" stroke-width="0.5"/>
                            </svg>
                        </div>
                    @endif
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
                        <label for="eye_director">Droit</label>
                    </div>
                    <div class="input-label">
                        <input type="radio" id="eye_director_left" wire:model.live.debounce.250ms="eye_director" value="1" {{ $eye_director == true ? 'checked' : '' }}>
                        <label for="eye_director_left">Gauche</label>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('eye_director')" />
            </div>
            <div class="input-label">
                <label for="elongate">Allonge</label>
                <div class="input-svg">
                    <input type="number" name="allonge" min="0" id="elongate" wire:model.live.debounce.500ms="elongate">
                    @if (array_key_exists('elongate', $inputModified) && $inputModified['elongate'])
                        <div>
                            <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 3.33333V13.3333C15 13.7917 14.8369 14.1842 14.5108 14.5108C14.1847 14.8375 13.7922 15.0006 13.3333 15H1.66667C1.20833 15 0.816111 14.8369 0.49 14.5108C0.163889 14.1847 0.000555556 13.7922 0 13.3333V1.66667C0 1.20833 0.163333 0.816111 0.49 0.49C0.816667 0.163889 1.20889 0.000555556 1.66667 0H11.6667L15 3.33333ZM7.5 12.5C8.19444 12.5 8.78472 12.2569 9.27083 11.7708C9.75694 11.2847 10 10.6944 10 10C10 9.30555 9.75694 8.71528 9.27083 8.22917C8.78472 7.74305 8.19444 7.5 7.5 7.5C6.80556 7.5 6.21528 7.74305 5.72917 8.22917C5.24306 8.71528 5 9.30555 5 10C5 10.6944 5.24306 11.2847 5.72917 11.7708C6.21528 12.2569 6.80556 12.5 7.5 12.5ZM2.5 5.83333H10V2.5H2.5V5.83333Z" fill="#fff"/>
                                <path d="M19.4498 5.13622L14.8856 11.071L13.5502 9.33447C13.3583 9.0849 13.0987 8.94825 12.787 8.94825C12.4753 8.94825 12.2157 9.0849 12.0238 9.33447C11.8352 9.5797 11.75 9.88179 11.75 10.2216C11.75 10.5614 11.8352 10.8634 12.0238 11.1087L14.1225 13.8375C14.3191 14.0933 14.5749 14.25 14.8856 14.25C15.1964 14.25 15.4522 14.0933 15.6488 13.8375L20.9762 6.91042C21.1648 6.6652 21.25 6.36311 21.25 6.02332C21.25 5.68353 21.1648 5.38145 20.9762 5.13622C20.7843 4.88665 20.5247 4.75 20.213 4.75C19.9013 4.75 19.6417 4.88665 19.4498 5.13622Z" fill="#06D727" stroke="white" stroke-width="0.5"/>
                            </svg>
                        </div>
                    @endif
                </div>
                <x-input-error :messages="$errors->get('elongate')" />
            </div>
        </div>
    </div>
</section>
