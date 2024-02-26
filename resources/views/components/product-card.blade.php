@props(['product'])
<a class="block group"
   href="{{ route('product.view', $product->defaultUrl->slug) }}">
    <div class="overflow-hidden border rounded-lg aspect-w-1 aspect-h-1 position-relative">
        @if($product->brand->defaultUrl->slug == 'xt-labs')
            <img src="{{ asset('img/us.svg') }}" class="product-brand" style="width: 40px; height: 40px;" alt="">
        @else
            <img src="{{ asset('img/international.svg') }}" class="product-brand" style="width: 40px; height: 40px;" alt="">
        @endif
        @if ($product->thumbnail)
            <img class="object-cover transition-transform duration-300 group-hover:scale-105"
                 src="{{ $product->thumbnail->getUrl('medium') }}?v=1"
                 alt="{{ $product->translateAttribute('name') }}" />
        @endif
    </div>

    <strong class="mt-2 text-sm font-medium">
        {{ $product->translateAttribute('name') }}
    </strong>

    <p class="mt-1 text-sm text-gray-600">
        <span class="sr-only">
            Price
        </span>

        <x-product-price :product="$product" />
    </p>
</a>
