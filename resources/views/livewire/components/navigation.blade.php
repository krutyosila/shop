<nav class="navbar navbar-expand-lg border-b">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <x-brand.logo class="w-auto h-6 text-indigo-600"/>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-6 h-6"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <div class="lg:order-last d-flex w-100 justify-end align-items-center mt-4 mt-md-0">
            <x-header.search class="max-w-sm mr-4"/>
            @livewire('components.cart')
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($this->collections as $collection)
                            <li>
                                <a class="dropdown-item"
                                   href="{{ route('collection.view', $collection->defaultUrl->slug) }}">
                                    {{ $collection->translateAttribute('name') }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Brands
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($this->collections as $collection)
                            <li>
                                <a class="dropdown-item"
                                   href="{{ route('collection.view', $collection->defaultUrl->slug) }}">
                                    {{ $collection->translateAttribute('name') }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Payment</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
