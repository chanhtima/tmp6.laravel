<div class="co-carousel-banner splide {{ $slideName }}">
    <div class="splide__track co-carousel-banner-wrapper">
        <div class="splide__list co-carousel-banner-list">
            @foreach ($slideData as $index => $slide)
                @if (!empty($slide['src']))
                    @if ($slide['type'] == 'image')
                        <div class="splide__slide co-carousel-banner-slide">
                            <div class="co-carousel-banner-item">
                                <img src="{{Module::asset('frontend:'.$slide['src'] ?? '')}}" {{!empty($slide['alt']) ? 'alt='.$slide['alt'] : ''}} >
                                @if (!empty($slide['url']))
                                    <a href="{{$slide['url']}}"></a>
                                @endif
                            </div>
                        </div>
                    @elseif($slide['type'] == 'video')
                        <div class="splide__slide co-carousel-banner-slide" data-splide-html-video="{{$slide['src']}}{{$videoSetting ?? '?autoplay=1&controls=0?playsinline=1'}}">
                            <div class="co-carousel-banner-item">
                                <img class="co-carousel-banner-cover" src="{{$slide['src']}}#t=0.1">
                            </div>
                        </div>
                    @elseif($slide['type'] == 'youtube')
                        @php
                            $youtubeID = array_reverse(explode("watch?v=",$slide['src']))
                        @endphp
                        <div class="splide__slide co-carousel-banner-slide" data-splide-youtube="{{$slide['src']}}{{$youtubeSetting ?? '?autoplay=1&controls=0?playsinline=1?modestbranding=1'}}">
                            <div class="co-carousel-banner-item">
                                <img class="co-carousel-banner-cover" src="https://i.ytimg.com/vi/{{$youtubeID[0]}}/mqdefault.jpg">
                            </div>
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
    </div>
</div>