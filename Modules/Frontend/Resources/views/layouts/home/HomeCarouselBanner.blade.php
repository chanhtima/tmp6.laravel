@php
    $slides = array(
        [
            'id'=>'0',
            'type'=>'image',
            'src'=>'img/sildeBanner2 (1).png',
            'alt'=>'Banner Slide',
            'url'=>'',
        ],

        [
            'id'=>'2',
            'type'=>'image',
            'src'=>'img/sildeBanner2 (2).png',
            'alt'=>'',
            'url'=>'',
        ],
        [
            'id'=>'3',
            'type'=>'image',
            'src'=>'img/sildeBanner2 (1).png',
            'alt'=>'',
            'url'=>'',
        ],
    )
@endphp

<x-frontend::carousel.CarouselBanner
    slideName='splide-banner-slide'
    :slideData=$slides
></x-frontend>