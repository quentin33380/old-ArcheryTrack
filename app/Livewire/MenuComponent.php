<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MenuComponent extends Component
{
    public $sousMenus = [];

    protected $listeners = ['arcAdded' => 'loadArcs'];

    public function mount()
    {
        $this->loadArcs();
    }

    public function loadArcs()
    {
        $userArcs = Auth::user()->arcs()->get();
        $this->sousMenus = $userArcs->map(function ($arc, $index) {
            return [
                'link' => route('arcs.edit', $arc),
                'nom' => $arc->nom,
            ];
        })->toArray();

        // Ajouter "Ajouter un arc" à la fin
        $this->sousMenus[] = ['link' => route('arcs.store'), 'nom' => '+ Ajouter un arc'];
    }

    public function render()
    {
        return view('livewire.menu-component');
    }
}
