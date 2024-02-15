<section id="progression" class="section-form">
    <div>
        <div class="progression-section">
            <div class="section-title">
                <p>Progression</p>
            </div>
            <h3>Passage de flèches</h3>
            @foreach(['white', 'black', 'blue', 'red', 'yellow'] as $color)
            <div>
                <input type="checkbox" wire:model="arrow_passage_{{ $color }}" id="arrow_{{ $color }}">
                <label for="arrow_{{ $color }}">{{ ucfirst($color) }}</label>
            </div>
            @endforeach
        </div>

        <div class="progression-section">
            <h3>Passage de plumes</h3>
            @foreach(['white', 'black', 'blue', 'red', 'yellow'] as $color)
            <div>
                <input type="checkbox" wire:model="feather_passage_{{ $color }}" id="feather_{{ $color }}">
                <label for="feather_{{ $color }}">{{ ucfirst($color) }}</label>
            </div>
            @endforeach
        </div>
    </div>
</section>
