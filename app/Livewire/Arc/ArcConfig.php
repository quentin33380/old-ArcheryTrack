<?php

namespace App\Livewire\Arc;

use App\Models\Arcs;
use App\Enums\TypeArc;
use Livewire\Component;
use Mockery\Matcher\Type;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class ArcConfig extends Component
{
    public $type;
    public $arcId;
    #[Rule('nullable|numeric|min:0')]
    public $puissance;
    #[Rule('required')]
    public $name;

    public $inputModified = [];

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

        $this->inputModified = array_fill_keys(array_keys($this->inputModified), true);

        $this->dispatch('refresh-arcs', ['arc_id' => $this->arcId, 'name' => $this->name]);
    }

    public function updated($propertyName, $value)
    {
        $this->inputModified[$propertyName] = true;
        $this->validate();
        $this->saveArc();
    }

    public function deleteArc($arcId)
    {
        $arc = Arcs::find($arcId);
        if ($arc && Auth::id() === $arc->user_id) {
            $arc->delete();
            $this->emit('arcDeleted');
        }
    }

    public function render()
    {
        return view('livewire.arc.arc-config');
    }
}
