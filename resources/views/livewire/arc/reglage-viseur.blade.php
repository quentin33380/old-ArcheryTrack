<div>
    <!-- Formulaire d'ajout/mise à jour de réglage -->
    <form wire:submit.prevent="saveReglage">
        @csrf
        <div class="input-group">
            <div class="input-label">
                <label for="distance">Distance en mètre</label>
                <input type="number" wire:model.lazy="distance" placeholder="Distance" step="0.01">
            </div>
            <div class="input-label">
                <label for="reglage">Réglage</label>
                <input type="number" wire:model.lazy="reglage" placeholder="Réglage" step="0.01">
            </div>
            <button type="submit">+ Ajouter</button>
        </div>
        @error('distance') <span class="error">{{ $message }}</span> @enderror
        @error('reglage') <span class="error">{{ $message }}</span> @enderror
    </form>

    @if ($reglagesListe->isNotEmpty())
        <div class="tableau-reglages">
            <div class="entete-tableau">
                <p>Réglages de Viseur enregistrés</p>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Distance</th>
                        <th>Réglage</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reglagesListe as $index => $reglage)
                        <tr>
                            <td>{{ $reglage->distance }}M</td>
                            <td>{{ $reglage->reglage }}</td>
                            <td>
                                <button wire:click="deleteReglage({{ $reglage->id }})" onclick="confirm('Êtes-vous sûr de vouloir supprimer ce réglage ?') || event.stopImmediatePropagation()">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>Aucun réglage enregistré.</p>
    @endif
</div>
