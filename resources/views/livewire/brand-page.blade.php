<section>
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-center">
            {{ $this->brand->translate('name') }}
        </h1>

        <div class="grid grid-cols-2 gap-8 mt-8 lg:grid-cols-4">
            @forelse($this->brand->products as $product)
                <x-product-card :product="$product" />
            @empty
            @endforelse
        </div>
    </div>
</section>
