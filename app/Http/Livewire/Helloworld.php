<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Helloworld extends Component
{
    public $name='Carlos';

    public $checkme=false;

    public $talk=['Goodbye'];

    public function resetname($name)
    {
        $this->name=$name;
    }

    public function render()
    {
        return view('livewire.helloworld');
    }
}
