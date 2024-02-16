<section id="progression" class="section-form">
    <div>
        <div class="progression-section">
            <div class="section-title">
                <p>Progression</p>
            </div>
            <h3>Passage de flèches</h3>
            <div class="bloc-image-et-input">
                <img src="{{asset('images/client/passageDeFleches.png')}}" alt="">
                <div>
                    @foreach($colors as $color => $frenchColor)
                        <div class="label-input">
                            <input type="checkbox" class="checkbox-{{ $color }}" wire:model.live.debounce.500ms="arrow_passage_{{ $color }}" id="arrow_{{ $color }}">
                            <label for="arrow_{{ $color }}">{{ ucfirst($frenchColor) }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="progression-section">
            <h3>Passage de plumes</h3>
            <div class="bloc-image-et-input">
                <img src="{{asset('images/client/passageDePlumes.png')}}" alt="">
                <div>
                    @foreach($colors as $color => $frenchColor)
                        <div class="label-input">
                            <input type="checkbox" class="checkbox-{{ $color }}" wire:model.live.debounce.500ms="feather_passage_{{ $color }}" id="feather_{{ $color }}">
                            <label for="feather_{{ $color }}">{{ ucfirst($frenchColor) }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
