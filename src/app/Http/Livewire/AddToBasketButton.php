<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddToBasketButton extends Component
{
    /**
      * @var int
     */
    public $productId;

    /**
     * Mount Component
     *
     * @param [type] $productId
     * @return void
     */
    public function mount(int $productId): void
    {
        $this->productId = $productId;
    }   

    /**
     * Render component
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.add-to-basket-button');
    }
}
