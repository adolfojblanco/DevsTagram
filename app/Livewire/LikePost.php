<?php

namespace App\Livewire;

use Livewire\Component;

class LikePost extends Component
{
    public $posts = "Este es un posts5115";

    public function render()
    {
        return view('livewire.like-post');
    }
}
