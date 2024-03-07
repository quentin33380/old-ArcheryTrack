<?php

namespace App\Livewire\Arc;

use Livewire\Component;
use App\Models\ReglageViseur;
use Livewire\Attributes\Rule;

class ReglagesViseur extends Component
{
    public $arcId;
    #[Rule('numeric')]
    public ?int $distance;
    #[Rule('numeric|between:0,99.99')]
    public ?float $reglage;
    public $reglagesListe;

    public function mount($arcId)
    {
        $this->arcId = $arcId;
        $this->resetInputFields();
        $this->reglagesListe = ReglageViseur::where('arc_id', $this->arcId)->get();
    }

    public function resetInputFields()
    {
        $this->distance = null;
        $this->reglage = null;
    }

    public function saveReglage()
    {
        $this->validate([
            'distance' => 'numeric|min:0',
            'reglage' => 'numeric|between:0,99.99',
        ]);

        // dd($this->arcId, $this->distance, $this->reglage);

        ReglageViseur::create([
            'arc_id' => $this->arcId,
            'distance' => $this->distance ?? 0,
            'reglage' => $this->reglage ?? 0,
        ]);

        $this->resetInputFields();
        $this->reglagesListe = ReglageViseur::where('arc_id', $this->arcId)->get();
    }

    public function deleteReglage($reglageId)
    {
        $reglage = ReglageViseur::find($reglageId);

        if ($reglage) {
            $reglage->delete();
            $this->reglagesListe = ReglageViseur::where('arc_id', $this->arcId)->get();
        }
    }

    public function render()
    {
        return view('livewire.arc.reglage-viseur');
    }
}
