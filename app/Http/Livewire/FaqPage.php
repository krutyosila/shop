<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;

class FaqPage extends Component
{
    use PerformsRedirects;

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        return view('livewire.faq');
    }
}
