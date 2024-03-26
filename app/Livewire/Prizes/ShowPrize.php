<?php

namespace App\Livewire\Prizes;

use App\Models\Prize;
use Livewire\Component;

class ShowPrize extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

        
    public function render()
    {
        $prize = Prize::find($this->id);
        return view('livewire.prizes.show-prize', ["prize" => $prize ]);
    }
}
