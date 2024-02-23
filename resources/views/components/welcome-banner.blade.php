<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="d-none d-md-block">
                <img src="{{ asset('img/slider/web-banner-1.jpg') }}" class="d-block w-100" alt="" style="height: 480px">
            </div>
            <div class="d-md-none">
                <img src="{{ asset('img/slider/mobile-banner-1.jpg')  }}" class="d-block w-100" alt="">
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-none d-md-block">
                <img src="{{ asset('img/slider/web-banner-2.jpg') }}" class="d-block w-100" alt="" style="height: 480px">
            </div>
            <div class="d-md-none">
                <img src="{{ asset('img/slider/mobile-banner-2.jpg')  }}" class="d-block w-100" alt="">
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
