<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProfileArcher;
use Livewire\Attributes\Rule;

class FormProgression extends Component
{

    public $colors = [
        'white' => 'Blanc',
        'black' => 'Noir',
        'blue' => 'Bleu',
        'red' => 'Rouge',
        'yellow' => 'Jaune',
    ];

    #[Rule('in:0,1')]
    public $arrow_passage_white = false;
    #[Rule('in:0,1')]
    public $arrow_passage_black = false;
    #[Rule('in:0,1')]
    public $arrow_passage_blue = false;
    #[Rule('in:0,1')]
    public $arrow_passage_red = false;
    #[Rule('in:0,1')]
    public $arrow_passage_yellow = false;
    #[Rule('in:0,1')]
    public $feather_passage_white = false;
    #[Rule('in:0,1')]
    public $feather_passage_black = false;
    #[Rule('in:0,1')]
    public $feather_passage_blue = false;
    #[Rule('in:0,1')]
    public $feather_passage_red = false;
    #[Rule('in:0,1')]
    public $feather_passage_yellow = false;

    public function mount()
    {
        $user_id = request()->user()->id;
        $profileArcher = ProfileArcher::firstWhere('user_id', $user_id);
        if(!empty($profileArcher)){
            $this->arrow_passage_white = $profileArcher->arrow_passage_white;
            $this->arrow_passage_black = $profileArcher->arrow_passage_black;
            $this->arrow_passage_blue = $profileArcher->arrow_passage_blue;
            $this->arrow_passage_red = $profileArcher->arrow_passage_red;
            $this->arrow_passage_yellow = $profileArcher->arrow_passage_yellow;
            $this->feather_passage_white = $profileArcher-> feather_passage_white;
            $this->feather_passage_black = $profileArcher->feather_passage_black;
            $this->feather_passage_blue = $profileArcher->feather_passage_blue;
            $this->feather_passage_red = $profileArcher->feather_passage_red;
            $this->feather_passage_yellow = $profileArcher->feather_passage_yellow;
        }
    }

    public function updated($propertyName)
    {
        $color = str_replace(['arrow_passage_', 'feather_passage_'], '', $propertyName);

        if ($this->$propertyName) {
            $this->checkPrevious($color, str_contains($propertyName, 'arrow') ? 'arrow' : 'feather');
        }

        $this->saveProgression();
    }

    protected function checkPrevious($color, $type)
    {
        $colors = ['white', 'black', 'blue', 'red', 'yellow'];
        $found = false;
        foreach (array_reverse($colors) as $checkColor) {
            if ($color == $checkColor) {
                $found = true;
            }
            if ($found) {
                $property = "{$type}_passage_{$checkColor}";
                $this->$property = true;
            }
        }
    }

    public function saveProgression()
    {
        $user_id = request()->user()->id;

        ProfileArcher::updateOrCreate(['user_id' => $user_id],
            $this->only([
                'arrow_passage_white',
                'arrow_passage_black',
                'arrow_passage_blue',
                'arrow_passage_red',
                'arrow_passage_yellow',
                'feather_passage_white',
                'feather_passage_black',
                'feather_passage_blue',
                'feather_passage_red',
                'feather_passage_yellow',
            ])
        );
    }
    public function render()
    {
        return view('livewire.form-progression');
    }
}
