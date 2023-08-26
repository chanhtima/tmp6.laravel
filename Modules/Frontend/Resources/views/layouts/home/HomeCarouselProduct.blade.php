@php
    $productCards = [
        [
            'id' => '0',
            'img' => 'img/blog-1.png',
            'title' => 'Product Promotion Title',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
            'url' => 'products-details',
        ],
        [
            'id' => '1',
            'img' => 'img/blog-2.png',
            'title' => 'Product Promotion Title',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
            'url' => 'products-details',
        ],
        [
            'id' => '2',
            'img' => 'img/blog-3.png',
            'title' => 'Product Promotion Title',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
            'url' => 'products-details',
        ],
        [
            'id' => '3',
            'img' => 'img/blog-4.png',
            'title' => 'Product Promotion Title',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
            'url' => 'products-details',
        ],
        [
            'id' => '4',
            'img' => 'img/blog-1.png',
            'title' => 'Product Promotion Title',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
            'url' => 'products-details',
        ],
        [
            'id' => '5',
            'img' => 'img/blog-2.png',
            'title' => 'Product Promotion Title',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
            'url' => 'products-details',
        ],
        [
            'id' => '6',
            'img' => 'img/blog-3.png',
            'title' => 'Product Promotion Title',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
            'url' => 'products-details',
        ],
        [
            'id' => '7',
            'img' => 'img/blog-4.png',
            'title' => 'Product Promotion Title',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetuer ',
            'url' => 'products-details',
        ],
       
    ];
@endphp
<div class="-mx-2">
    <x-frontend::carousel.CarouselMultiple slideName='splide-product'>
        @slot('slideItemList')
        @foreach ($productCards as $index => $card)
        <x-frontend::carousel.CarouselMultipleItem>
            @slot('slideItem')
            <div class="p-2">
                <x-frontend::card.Card01Curved :img="$card['img']" :url="$card['url']" :title="$card['title']" :subtitle="$card['subtitle']">
                </x-frontend>
            </div>
            @endslot
        </x-frontend>
        @endforeach
        @endslot
    </x-frontend>
</div>
