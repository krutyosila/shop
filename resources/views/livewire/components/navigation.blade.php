<nav class="navbar navbar-expand-lg shadow-sm bg-light">
    <div class="container">
        <div class="flex items-center justify-between w-100 w-lg-auto">
            <button class="navbar-toggler ps-0 pe-0 border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-8 h-8" style="color: #000000"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <x-brand.logo class="w-auto h-6 text-indigo-600"/>
            </a>
            <div class="d-block d-lg-none">
                @livewire('components.cart')
            </div>
        </div>
        <div class="lg:order-last d-flex w-100 w-lg-25 justify-end align-items-center mt-2 mt-lg-0">
            <x-header.search/>
            <div class="d-none d-lg-block ms-3">
                @livewire('components.cart')
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 font-bold">
                <!--
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('collections*') ? 'active' : '' }}"
                       href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($this->collections as $collection)
                            <li>
                                <a class="dropdown-item d-flex align-items-center"
                                   href="{{ route('collection.view', $collection->defaultUrl->slug) }}">
                                    @if($collection->getMedia('images')->count() > 0)
                                        @php
                                            $media = $collection->getMedia('images');
                                        @endphp
                                        <img src="{{$media[0]->getFullUrl()}}" style="height: 20px" alt="">
                                    @endif
                                    <span class="ps-3 pe-4 w-100">
                                        {{ $collection->translateAttribute('name') }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('brands*') ? 'active' : '' }}"
                       href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Brands
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($brands as $brand)
                            <li>
                                <a class="dropdown-item d-flex align-items-center"
                                   href="{{ route('brands.view', $brand->defaultUrl->slug) }}">
                                    @if($brand->defaultUrl->slug == 'xt-labs')
                                        <img src="{{ asset('img/us.svg') }}" style="height: 20px;" alt="">
                                    @else
                                        <img src="{{ asset('img/international.svg') }}" style="height: 20px;" alt="">
                                    @endif
                                    <span class="ps-3 pe-4 w-100">
                                    {{ $brand->translate('name') }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faq.page') }}"
                       class="nav-link {{ request()->is('faq') ? 'active' : '' }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('payment.page') }}"
                       class="nav-link {{ request()->is('payment') ? 'active' : '' }}">Payment</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
