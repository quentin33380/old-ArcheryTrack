<?php

namespace App\Livewire;

use App\Models\Arcs;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

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
        $userArcs = Auth::user()->arcs;
        $this->sousMenus = $userArcs->map(function ($arc, $index) {
            $nomArc = Str::slug($arc->name, '-');
            return [
                'link' => route('arcs.index', ['slug' => $nomArc]),
                'nom' => $arc->name,
            ];
        })->toArray();


        $this->sousMenus[] = ['link' => route('arcs.profile'), 'nom' => '+ Ajouter un arc'];
    }

    #[On('refresh-arcs')]
    public function refreshArc(){
        $this->loadArcs();
    }

    public function ajouterArc()
    {
        $this->redirect(route('arcs.profile'));
    }

    public function render()
    {
        return view('livewire.menu-component');
    }
}
