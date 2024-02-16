<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProfileArcher;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Locked;

class FormProfileArcher extends Component
{
    #[Rule('string|max:20')]
    public $federation;
    #[Rule('string|max:20')]
    public $license_number;
    #[Rule('in:0,1')]
    public $eye_director = false;
    #[Rule('numeric|min:0')]
    public $elongate;

    public function mount()
    {
        $user_id = request()->user()->id;
        $profileArcher = ProfileArcher::firstWhere('user_id', $user_id);
        if(!empty($profileArcher)){
            $this->federation = $profileArcher->federation;
            $this->license_number = $profileArcher->license_number;
            $this->eye_director = $profileArcher->eye_director;
            $this->elongate = $profileArcher->elongate;
        }
    }

    public function updated()
    {
        $this->saveProfile();
    }

    public function saveProfile()
    {
        $user_id = request()->user()->id;

        ProfileArcher::updateOrCreate(['user_id' => $user_id],
            $this->only([
                'federation',
                'license_number',
                'eye_director',
                'elongate',
            ])
        );
    }

    public function render()
    {
        return view('livewire.form-profile-archer');
    }
}
