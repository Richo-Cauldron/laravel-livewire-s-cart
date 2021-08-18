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
     * @var integer
     */
    public $qty = 1;

    /**
     * @var integer
     */
    public $currentQty = 0;

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

    
    public function hydrate()
    {
        $this->currentQty = basket()->getCurrentQty($this->productId);
    }

    /**
     * Add product to basket
     *
     * @return void
     */
    public function add(): void
    {
        $qty = $this->currentQty + $this->qty;

        if ($qty < 1) {
            return;
        }

        basket()->add($this->productId, $qty);

        $this->qty =1;
        
        $this->emit('basketUpdated');
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
