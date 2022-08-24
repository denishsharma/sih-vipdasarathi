<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class NavigationBar extends Component
{

    public $activeButton = 'home';

    public function render()
    {
        return view('livewire.components.navigation-bar');
    }
}
