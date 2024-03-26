<?php

namespace App\Livewire\Prizes;

use App\Models\Prize;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPrize extends Component
{
    use WithFileUploads;

    public $title, $image, $quota, $first_prize, $second_prize, $third_prize, $fourth_prize, $fifth_prize;

    public function render()
    {
        return view('livewire.prizes.add-prize');
    }

    public function store()
    {
        $this->validate([
            "title"         => 'required|min:2|max:191',
            "image"         => 'required|image|mimes:png, jpg, svg, gif',
            "first_prize"   => 'nullable',
            "second_prize"  => 'nullable',
            "third_prize"   => 'nullable',
            "fourth_prize"  => 'nullable',
            "fifth_prize"   => 'nullable',
        ]);

        $user = Auth::guard('web')->user();
        $filename = $this->image->store("images_".$user->id);
        Prize::create([
            "title" => $this->title,
            "image" => $filename,
            "user_id" => $user->id,
            "first_prize"   => $this->first_prize,
            "second_prize"  => $this->second_prize,
            "third_prize"   => $this->third_prize,
            "fourth_prize"  => $this->fourth_prize,
            "fifth_prize"   => $this->fifth_prize,
        ]);
        session()->flash('success', "Sorteio cadastrado com sucesso");
        $this->redirectRoute('dashboard', navigate:true);
    }
}