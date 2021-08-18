<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Basket extends Component
{

    /**
     * @var bool
     */
    public $visible;

    protected $listeners = ['toggleBasket' => 'toggle'];

    /**
     * Toggle Basket visibility
     *
     * @return void
     */
    public function toggle(): void
    {
        $this->visible = ! $this->visible;
    }

    public function render()
    {
        return view('livewire.basket');
    }
}
