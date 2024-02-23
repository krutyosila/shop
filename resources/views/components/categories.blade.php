<div class="rounded overflow-hidden">
    <div class="d-none d-md-block">
        <img src="{{ asset('img/slider/web-banner-2.jpg') }}" class="d-block w-100" alt="" style="height: 480px">
    </div>
    <div class="d-md-none">
        <img src="{{ asset('img/slider/mobile-banner-2-1.jpg')  }}" class="d-block w-100" alt="">
    </div>
</div>
<div class="grid grid-cols-2 mt-8 lg:grid-cols-4 gap-x-4 gap-y-8">
    @foreach ($this->brands as $brand)
        @if($brand->getMedia('images')->count() > 0)
            <a href="{{ route('brands.view', ['slug' => $brand->defaultUrl->slug]) }}"
               class="block rounded overflow-hidden">
                @php
                    $media = $brand->getMedia('images');
                @endphp
                <img src="{{$media[0]->getFullUrl()}}"
                     class="d-block w-100" alt="" style="max-height: 180px">
            </a>
        @endif
    @endforeach
</div>
