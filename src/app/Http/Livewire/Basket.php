<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;

// use Illuminate\Support\Collection;

class Basket extends Component
{

    /**
     * @var bool
     */
    public $visible;
    /**
     * @var array
     */
    public $basket = [];
    /**
     * @var array
     */
    public$products = [];
    /**
    * @var float
    */
    public $total = 0.00;

    protected $listeners = [
        'basketUpdated' => 'hydrate',
        'toggleBasket' => 'toggle'
    ];

    /**
     * Hydrate component
     *
     * @return void
     */
    public function hydrate():void
    {
        $this->basket = basket()->all();

        $this->products = tap(
            $this->products(),
            fn(SupportCollection $products) => $this->total = int_to_decimal($products->sum('total'))
        )->toArray();
    }

    /**
     * Get Products
     *
     * @return Illuminate\Support\Collection
     */
    private function products(): SupportCollection
    {
        if (empty($this->basket)) {
            return new SupportCollection;
        }

        return Product::whereIn('id' , array_keys($this->basket))
            ->get()
            ->map(function(Product $product) {
                return (object) [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'formatted_price' => $product->formatted_price,
                    'qty' => $qty = $this->basket[$product->id],
                    'total' => $product->price * $qty 
                ];
            });
    }

    /**
     * Toggle Basket visibility
     *
     * @return void
     */
    public function toggle(): void
    {
        $this->visible = ! $this->visible;
    }

   /**
    * Remove product.
    *
    * @param integer $id
    * @return void
    */
    public function remove(int $id): void
    {
        basket()->remove($id);
        
        $this->update();
    }

    /**
     * Update basket.
     *
     * @return void
     */
    private function update(): void
    {
        $this->emit('basketUpdated');
    }

    /**
     * Increase product quantity.
     *
     * @param integer $id
     * @return void
     */
    public function increase(int $id): void
    {
        basket()->add($id, $this->basket[$id] + 1);

        $this->update();
    }

     /**
     * Decrease product quantity.
     *
     * @param integer $id
     * @return void
     */
    public function decrease(int $id): void
    {
        $qty = $this->basket[$id] - 1;
        if (($qty) < 1) {
            $this->remove($id);
        } else {        
            basket()->add($id, $qty);
            $this->update();
        }
    }

    /**
     * Render Component
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.basket');
    }
}
