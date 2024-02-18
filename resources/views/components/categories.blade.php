<div class="grid grid-cols-2 mt-8 lg:grid-cols-4 gap-x-4 gap-y-8">
    @foreach ($this->brands as $brand)
        <a href="{{ route('brands.view', ['slug' => $brand->defaultUrl->slug]) }}" class="block rounded overflow-hidden">
            @if($brand->getMedia('images')->count() > 0)
                @php
                $media = $brand->getMedia('images');
                @endphp
                <img src="{{$media[0]->getFullUrl()}}"
                     class="d-block w-100" alt="" style="height: 180px">
            @else
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     class="d-block w-100" alt="" style="height: 180px">
            @endif
        </a>
    @endforeach
</div>
