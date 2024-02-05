<?php

namespace App\Http\Livewire;

use App\Traits\FetchesUrls;
use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;
use Lunar\Models\Brand;

class BrandPage extends Component
{
    use PerformsRedirects,
        FetchesUrls;

    /**
     * {@inheritDoc}
     *
     * @param string $slug
     * @return void
     *
     * @throws \Http\Client\Exception\HttpException
     */
    public function mount($slug)
    {
        $this->url = $this->fetchUrl(
            $slug,
            Brand::class,
            [
                'element.thumbnail',
                'element.products.variants.basePrices',
                'element.products.defaultUrl',
            ]
        );

        if (!$this->url) {
            abort(404);
        }
    }

    /**
     * Computed property to return the collection.
     *
     * @return \Lunar\Models\Brand
     */
    public function getBrandProperty()
    {
        return $this->url->element;
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        return view('livewire.brand-page');
    }
}
