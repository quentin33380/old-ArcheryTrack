<?php

namespace App\Livewire;

use Livewire\Component;

class MenuComponent extends Component
{
    public $sousMenus = [
        ['link' => 'ajouter-arc', 'nom' => '+ Ajouter un arc'],
    ];

    public function ajouterArc()
    {

        $numero = count($this->sousMenus);
        $nouveauNom = 'Nom n°' . $numero;
        $nouveauLink = 'profil-arc-' . $numero;
        array_splice($this->sousMenus, count($this->sousMenus) - 1, 0, [[
            'link' => $nouveauLink,
            'nom' => $nouveauNom,
        ]]);
    }

    public function render()
    {
        return view('livewire.menu-component');
    }
}
