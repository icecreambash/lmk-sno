<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewsPage extends Component
{
    public function render()
    {
        return view('livewire.news-page')->layout('layouts.app');
    }
}
