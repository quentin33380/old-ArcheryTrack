<div x-data="{ tab: 'info-arc' }">
    <div class="group-button">
        <button x-on:click="tab = 'info-arc'" x-bind:class="{'tab-activated': tab === 'info-arc'}" class="tab">
            Informations de l'arc
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg-reglages">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                </svg>
            </span>
        </button>
        <button x-on:click="tab = 'info-viseur'" x-bind:class="{'tab-activated': tab === 'info-viseur'}" class="tab">
            Réglages de viseur
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="svg-reglages">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                </svg>
            </span>
        </button>
    </div>
    <section class="section-form" x-show="tab === 'info-arc'">
        <div>
            <div class="section-title">
                <p>Configuration de votre arc</p>
            </div>
            <div class="group-input-info">
                <div class="input-label">
                    <label for="name">Nom de l'arc</label>
                    <div class="input-svg">
                        <input type="text" id="name" wire:model.live.debounce.500ms="name">
                        @if (array_key_exists('name', $inputModified) && $inputModified['name'])
                            <div>
                                <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 3.33333V13.3333C15 13.7917 14.8369 14.1842 14.5108 14.5108C14.1847 14.8375 13.7922 15.0006 13.3333 15H1.66667C1.20833 15 0.816111 14.8369 0.49 14.5108C0.163889 14.1847 0.000555556 13.7922 0 13.3333V1.66667C0 1.20833 0.163333 0.816111 0.49 0.49C0.816667 0.163889 1.20889 0.000555556 1.66667 0H11.6667L15 3.33333ZM7.5 12.5C8.19444 12.5 8.78472 12.2569 9.27083 11.7708C9.75694 11.2847 10 10.6944 10 10C10 9.30555 9.75694 8.71528 9.27083 8.22917C8.78472 7.74305 8.19444 7.5 7.5 7.5C6.80556 7.5 6.21528 7.74305 5.72917 8.22917C5.24306 8.71528 5 9.30555 5 10C5 10.6944 5.24306 11.2847 5.72917 11.7708C6.21528 12.2569 6.80556 12.5 7.5 12.5ZM2.5 5.83333H10V2.5H2.5V5.83333Z" fill="#fff"/>
                                    <path d="M19.4498 5.13622L14.8856 11.071L13.5502 9.33447C13.3583 9.0849 13.0987 8.94825 12.787 8.94825C12.4753 8.94825 12.2157 9.0849 12.0238 9.33447C11.8352 9.5797 11.75 9.88179 11.75 10.2216C11.75 10.5614 11.8352 10.8634 12.0238 11.1087L14.1225 13.8375C14.3191 14.0933 14.5749 14.25 14.8856 14.25C15.1964 14.25 15.4522 14.0933 15.6488 13.8375L20.9762 6.91042C21.1648 6.6652 21.25 6.36311 21.25 6.02332C21.25 5.68353 21.1648 5.38145 20.9762 5.13622C20.7843 4.88665 20.5247 4.75 20.213 4.75C19.9013 4.75 19.6417 4.88665 19.4498 5.13622Z" fill="#06D727" stroke="white" stroke-width="0.5"/>
                                </svg>
                            </div>
                        @endif
                    </div>
                    <x-input-error :messages="$errors->get('name')" />
                </div>
                <div class="input-flex">
                    <div class="input-label label-select-custom" x-data="{ open: false, selected: {{Js::from($type ? App\Enums\TypeArc::tryFrom($type)?->displayName() : 'Sélectionnez un type d\'arc')}} }">
                        <p>Type d'arc</p>
                        <div class="select">
                            <div x-on:click="open = !open" class="label">
                                <div class="input-svg">
                                    <span class="selected" x-text="selected" wire:ignore></span>
                                    @if (array_key_exists('type', $inputModified) && $inputModified['type'])
                                        <div>
                                            <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 3.33333V13.3333C15 13.7917 14.8369 14.1842 14.5108 14.5108C14.1847 14.8375 13.7922 15.0006 13.3333 15H1.66667C1.20833 15 0.816111 14.8369 0.49 14.5108C0.163889 14.1847 0.000555556 13.7922 0 13.3333V1.66667C0 1.20833 0.163333 0.816111 0.49 0.49C0.816667 0.163889 1.20889 0.000555556 1.66667 0H11.6667L15 3.33333ZM7.5 12.5C8.19444 12.5 8.78472 12.2569 9.27083 11.7708C9.75694 11.2847 10 10.6944 10 10C10 9.30555 9.75694 8.71528 9.27083 8.22917C8.78472 7.74305 8.19444 7.5 7.5 7.5C6.80556 7.5 6.21528 7.74305 5.72917 8.22917C5.24306 8.71528 5 9.30555 5 10C5 10.6944 5.24306 11.2847 5.72917 11.7708C6.21528 12.2569 6.80556 12.5 7.5 12.5ZM2.5 5.83333H10V2.5H2.5V5.83333Z" fill="#fff"/>
                                                <path d="M19.4498 5.13622L14.8856 11.071L13.5502 9.33447C13.3583 9.0849 13.0987 8.94825 12.787 8.94825C12.4753 8.94825 12.2157 9.0849 12.0238 9.33447C11.8352 9.5797 11.75 9.88179 11.75 10.2216C11.75 10.5614 11.8352 10.8634 12.0238 11.1087L14.1225 13.8375C14.3191 14.0933 14.5749 14.25 14.8856 14.25C15.1964 14.25 15.4522 14.0933 15.6488 13.8375L20.9762 6.91042C21.1648 6.6652 21.25 6.36311 21.25 6.02332C21.25 5.68353 21.1648 5.38145 20.9762 5.13622C20.7843 4.88665 20.5247 4.75 20.213 4.75C19.9013 4.75 19.6417 4.88665 19.4498 5.13622Z" fill="#06D727" stroke="white" stroke-width="0.5"/>
                                            </svg>
                                        </div>
                                    @endif
                                </div>
                                <span class="chevron" x-bind:class="{'chevron-rotated': open}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <ul
                            x-show="open"
                            x-on:click.away="open = false"
                            class="options"
                            >
                            @foreach ( App\Enums\TypeArc::cases() as $typeArc )
                                <li x-on:click="selected = '{{ $typeArc->displayName() }}'; open = false; $wire.set('type', '{{ $typeArc->value }}'); $wire.$refresh()">
                                    {{ $typeArc->displayName() }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="group-input-info-puissance">
                        <div class="input-label">
                            <label for="puissance">Puissance <span class="label-info">en livres</span></label>
                            <div class="input-svg">
                                <input type="number" id="puissance" wire:model.live.debounce.500ms="puissance">
                                @if (array_key_exists('puissance', $inputModified) && $inputModified['puissance'])
                                    <div>
                                        <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 3.33333V13.3333C15 13.7917 14.8369 14.1842 14.5108 14.5108C14.1847 14.8375 13.7922 15.0006 13.3333 15H1.66667C1.20833 15 0.816111 14.8369 0.49 14.5108C0.163889 14.1847 0.000555556 13.7922 0 13.3333V1.66667C0 1.20833 0.163333 0.816111 0.49 0.49C0.816667 0.163889 1.20889 0.000555556 1.66667 0H11.6667L15 3.33333ZM7.5 12.5C8.19444 12.5 8.78472 12.2569 9.27083 11.7708C9.75694 11.2847 10 10.6944 10 10C10 9.30555 9.75694 8.71528 9.27083 8.22917C8.78472 7.74305 8.19444 7.5 7.5 7.5C6.80556 7.5 6.21528 7.74305 5.72917 8.22917C5.24306 8.71528 5 9.30555 5 10C5 10.6944 5.24306 11.2847 5.72917 11.7708C6.21528 12.2569 6.80556 12.5 7.5 12.5ZM2.5 5.83333H10V2.5H2.5V5.83333Z" fill="#fff"/>
                                            <path d="M19.4498 5.13622L14.8856 11.071L13.5502 9.33447C13.3583 9.0849 13.0987 8.94825 12.787 8.94825C12.4753 8.94825 12.2157 9.0849 12.0238 9.33447C11.8352 9.5797 11.75 9.88179 11.75 10.2216C11.75 10.5614 11.8352 10.8634 12.0238 11.1087L14.1225 13.8375C14.3191 14.0933 14.5749 14.25 14.8856 14.25C15.1964 14.25 15.4522 14.0933 15.6488 13.8375L20.9762 6.91042C21.1648 6.6652 21.25 6.36311 21.25 6.02332C21.25 5.68353 21.1648 5.38145 20.9762 5.13622C20.7843 4.88665 20.5247 4.75 20.213 4.75C19.9013 4.75 19.6417 4.88665 19.4498 5.13622Z" fill="#06D727" stroke="white" stroke-width="0.5"/>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            <x-input-error :messages="$errors->get('puissance')" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-form" x-show="tab === 'info-viseur'">
        <div class="group-input-info">
            <div class="section-title">
                <p>Configuration de votre viseur</p>
            </div>
            <div class="input-label">
                <label for="viseur_marque">Marque</label>
                <div class="input-svg">
                    <input type="text" id="viseur_marque" wire:model.live.debounce.500ms="viseur_marque">
                    @if (array_key_exists('viseur_marque', $inputModified) && $inputModified['viseur_marque'])
                        <div>
                            <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 3.33333V13.3333C15 13.7917 14.8369 14.1842 14.5108 14.5108C14.1847 14.8375 13.7922 15.0006 13.3333 15H1.66667C1.20833 15 0.816111 14.8369 0.49 14.5108C0.163889 14.1847 0.000555556 13.7922 0 13.3333V1.66667C0 1.20833 0.163333 0.816111 0.49 0.49C0.816667 0.163889 1.20889 0.000555556 1.66667 0H11.6667L15 3.33333ZM7.5 12.5C8.19444 12.5 8.78472 12.2569 9.27083 11.7708C9.75694 11.2847 10 10.6944 10 10C10 9.30555 9.75694 8.71528 9.27083 8.22917C8.78472 7.74305 8.19444 7.5 7.5 7.5C6.80556 7.5 6.21528 7.74305 5.72917 8.22917C5.24306 8.71528 5 9.30555 5 10C5 10.6944 5.24306 11.2847 5.72917 11.7708C6.21528 12.2569 6.80556 12.5 7.5 12.5ZM2.5 5.83333H10V2.5H2.5V5.83333Z" fill="#fff"/>
                                <path d="M19.4498 5.13622L14.8856 11.071L13.5502 9.33447C13.3583 9.0849 13.0987 8.94825 12.787 8.94825C12.4753 8.94825 12.2157 9.0849 12.0238 9.33447C11.8352 9.5797 11.75 9.88179 11.75 10.2216C11.75 10.5614 11.8352 10.8634 12.0238 11.1087L14.1225 13.8375C14.3191 14.0933 14.5749 14.25 14.8856 14.25C15.1964 14.25 15.4522 14.0933 15.6488 13.8375L20.9762 6.91042C21.1648 6.6652 21.25 6.36311 21.25 6.02332C21.25 5.68353 21.1648 5.38145 20.9762 5.13622C20.7843 4.88665 20.5247 4.75 20.213 4.75C19.9013 4.75 19.6417 4.88665 19.4498 5.13622Z" fill="#06D727" stroke="white" stroke-width="0.5"/>
                            </svg>
                        </div>
                    @endif
                </div>
                <x-input-error :messages="$errors->get('viseur_marque')" />
            </div>

            <div class="tableau-input">
                @livewire('arc.reglages-viseur', ['arcId' => $arcId])
            </div>
        </div>
    </section>

</div>
