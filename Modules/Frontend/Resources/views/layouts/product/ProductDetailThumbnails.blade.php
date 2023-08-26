<div class="lg-product-detail-thumbnails">
    <x-frontend::carousel.CarouselMultiple slideName='slider-Product-details'>
        @slot('slideItemList')
            @foreach ($productCards as $index => $card)
                <x-frontend::carousel.CarouselMultipleItem>
                    @slot('slideItem')

                            <img class="lg-product-detail-thumbnails-img" src="{{Module::asset('frontend:'.$card['img'] ?? '')}}" alt="{{ $card['title'] }}">

                    @endslot
                </x-frontend::carousel.CarouselMultipleItem>
            @endforeach
        @endslot
    </x-frontend::carousel.CarouselMultiple>

    <x-frontend::carousel.CarouselMultiple slideName='slider-Produc-Thumbnails'>
        @slot('slideItemList')
            @foreach ($productCards as $index => $card)
                <x-frontend::carousel.CarouselMultipleItem>
                    @slot('slideItem')
                            <img  class="lg-product-detail-thumbnails-img"  src="{{Module::asset('frontend:'.$card['img'] ?? '')}}" alt="{{ $card['title'] }}">
                    @endslot
                </x-frontend::carousel.CarouselMultipleItem>
            @endforeach
        @endslot
    </x-frontend::carousel.CarouselMultiple>
</div>