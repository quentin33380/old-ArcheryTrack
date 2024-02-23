<?php

namespace App\Livewire\Arc;

use App\Models\Arcs;
use App\Enums\TypeArc;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Mockery\Matcher\Type;

class ArcConfig extends Component
{
    public $type;
    public $arcId;
    #[Rule('numeric|min:0')]
    public $puissance;
    #[Rule('required')]
    public $name;

    public function mount($arc_id)
    {
        $arc = Arcs::firstWhere('id', $arc_id);
        if(!empty($arc)){
            $this->arcId = $arc_id;
            $this->type = $arc->type;
            $this->puissance = $arc->puissance;
            $this->name = $arc->name;
        }else{
            $this->type = '';
        }
    }

    public function updatedData()
    {
        $arc = Arcs::find($this->type);
        $arc->data = $this->data;
        $arc->save();
    }

    public function saveArc()
    {
        $this->validate();

        Arcs::updateOrCreate(['id' => $this->arcId],
            $this->only([
                'type',
                'puissance',
                'name',
            ])
        );
        $this->dispatch('refresh-arcs', ['arc_id' => $this->arcId, 'name' => $this->name]);
    }

    public function updated()
    {
        $this->saveArc();
    }

    public function render()
    {
        return view('livewire.arc.arc-config');
    }
}
