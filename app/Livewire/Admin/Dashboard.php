<?php

namespace App\Livewire\Admin;

use App\Models\Prize;
use Livewire\Component;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Title('dashboard')]

    public function render()
    {
        $prizes = Prize::select("*")->orderBy('id', 'desc')->get();
        return view('livewire.admin.dashboard', ["prizes" => $prizes]);
    }
}
