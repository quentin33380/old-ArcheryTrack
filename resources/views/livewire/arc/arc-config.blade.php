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
        <div class="group-input-info">
            <div class="section-title">
                <p>Configuration de votre arc</p>
            </div>
        </div>
    </section>
    <section class="section-form"  x-show="tab === 'info-viseur'">
        <div class="group-input-info">
            <div class="section-title">
                <p>Configuration de votre viseur</p>
            </div>
        </div>
    </section>
</div>
