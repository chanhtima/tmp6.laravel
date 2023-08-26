@php
    $slides = array(
    
        [
            'id'=>'1',
            'type'=>'youtube',
            'src'=>'https://www.youtube.com/watch?v=l40nk18GUzk&t=23s&ab_channel=4KOceanWorld',
            'alt'=>'',
            'url'=>'',
        ],
        [
            'id'=>'2',
            'type'=>'youtube',
            'src'=>'https://www.youtube.com/watch?v=l40nk18GUzk&t=23s&ab_channel=4KOceanWorld',
            'alt'=>'',
            'url'=>'',
        ],
        [
            'id'=>'3',
            'type'=>'youtube',
            'src'=>'https://www.youtube.com/watch?v=l40nk18GUzk&t=23s&ab_channel=4KOceanWorld',
            'alt'=>'',
            'url'=>'',
        ],
      
    )
@endphp

<div class=" rounded-xl">
    <x-frontend::carousel.CarouselBanner
    slideName='splide-video-slide'
    :slideData=$slides
    >
 </x-frontend>
</div>


