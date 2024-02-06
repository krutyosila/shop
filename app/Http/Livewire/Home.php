<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Collection;
use Lunar\Models\Product;
use Lunar\Models\Url;

class Home extends Component
{
    /**
     * Return the sale collection.
     *
     * @return void
     */
    public function getSaleCollectionProperty()
    {
        return Url::whereElementType(Collection::class)->whereSlug('sale')->first()?->element ?? null;
    }

    /**
     * Return all images in sale collection.
     *
     * @return void
     */
    public function getSaleCollectionImagesProperty()
    {
        if (! $this->getSaleCollectionProperty()) {
            return;
        }

        $collectionProducts = $this->getSaleCollectionProperty()
            ->products()->inRandomOrder()->limit(4)->get();

        $saleImages = $collectionProducts->map(function ($product) {
            return $product->thumbnail;
        });

        return $saleImages->chunk(2);
    }

    /**
     * Return a random collection.
     *
     * @return \LaravelIdea\Helper\Lunar\Models\_IH_Product_C|Product[]
     */
    public function getProductsProperty()
    {
        /*
        if ($this->getSaleCollectionProperty()) {
            $collections = $collections->where('element_id', '!=', $this->getSaleCollectionProperty()?->id);
        }
        */
        return Product::inRandomOrder()->limit(8)->get();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
