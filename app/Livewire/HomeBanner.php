<?php

namespace App\Livewire;

use Livewire\Component;

class HomeBanner extends Component
{

    public $banners;

    public function render()
    {
        return view('livewire.home-banner');
    }

    public function mount($banners)
    {
        $this->banners = $banners;
    }

}
