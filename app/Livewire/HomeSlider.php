<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\HomeBanner;

class HomeSlider extends Component
{
    public $slides = [];

    public function mount()
    {
        $this->slides = HomeBanner::orderBy('order')->get();
    }

    public function render()
    {
        return view('livewire.home-slider');
    }
}
