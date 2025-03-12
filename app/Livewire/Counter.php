<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $name = '';
    public $showMessage = false;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function toggleMessage()
    {
        $this->showMessage = !$this->showMessage;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
