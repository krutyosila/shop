<x-welcome-banner/>

<div class="max-w-screen-xl px-4 py-12 mx-auto space-y-12 sm:px-6 lg:px-8">
    @if ($this->saleCollection)
        <x-collection-sale/>
    @endif

    @if ($this->products)
        <section>
            <h2 class="text-2xl font-bold text-center uppercase">
                Best Sellers
            </h2>

            <div class="grid grid-cols-2 mt-8 lg:grid-cols-4 gap-x-4 gap-y-8">
                @foreach ($this->products as $product)
                    <x-product-card :product="$product"/>
                @endforeach
            </div>
        </section>
    @endif

    <x-categories/>
</div>

