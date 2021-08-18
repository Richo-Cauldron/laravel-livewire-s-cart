<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BasketButton extends Component
{
    /**
     * @var int
     */
    public $qty;

    
    /**
     * @var array
     */
    protected $listeners = ['basketUpdated' => 'update'];

    /**
     * Mount component
     *
     * @return void
     */
    public function mount(): void
    {
        $this->update();
    }


    public function toggle(): void
    {
        $this->emit('toggleBasket');
    }

    /**
     * Update qty
     *
     * @return void
     */
    public function update(): void
    {
        $this->qty = array_sum(basket()->all());
    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.basket-button');
    }
}
