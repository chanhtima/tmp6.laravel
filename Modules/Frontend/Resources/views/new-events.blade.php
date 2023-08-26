@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main class="bg-all">
        <div class="bg-gradient-to-r  from-primary-focus py-6 ">
            <div class="container">
                <h2 class="home-title  text-white">NEWS & EVENTS</h2>
            </div>
        </div>
        <div class="container py-8 lg:py-12">
            @php
                $cards = [];
                $images = ['blog-4.png', 'blog-2.png', 'blog-3.png'];
                $titles = ['Name New & Event 1', 'Name New & Event 2', 'Name New & Event 3', 'Name New & Event 4', 
                'Name New & Event 5', 'Name New & Event 6', 'Name New & Event 7', 'Name New & Event 8', 
                'Name New & Event 9', 'Name New & Event 10', 'Name New & Event 11', 'Name New & Event 12'];
                $dates = ['01-12-2566 ', '01-11-2566 ', '01-10-2566 ', '01-09-2566 ', 
                '01-08-2566 ', '01-07-2566 ', '01-06-2566 ', '01-05-2566 ', 
                '01-04-2566 ', '01-03-2566 ', '01-02-2566 ', '01-11-2566 '];
                $subtitle = 'Lorem ipsum dolor sit amet, consectetuer Lorem ipsum dolor sit amet, consectetuer ';
                $url = 'new-details';
                $icon = 'Date_today.png';
                for ($i = 0; $i < 12; $i++) {
                    $cards[] = [
                        'id' => $i,
                        'img' => $images[$i % 3],
                        'title' => $titles[$i],
                        'date' => $dates[$i],
                        'subtitle' => $subtitle,
                        'url' => $url,
                        'icon' => $icon,
                    ];
                }
            @endphp
            

            <div class="flex flex-wrap -m-3">
                @foreach($cards as $index => $card)
                        <div class="w-full xs:w-1/2 lg:w-1/3 xl:w-1/4 p-3 ">
                    <x-frontend::card.Card01CurvedDate
                    :img="$card['img']"
                    :subtitle="$card['subtitle']"
                    :url="$card['url']"
                    :title="$card['title']"
                    :date="$card['date']"
                    :icon="$card['icon']"
                    ></x-frontend::card.Card01CurvedDate>
    
                </div>
                @endforeach
            </div>
            <div class=" w-full pt-6">
                @include('frontend::components.pagination.PaginationBasic')
            </div>
        </div>

    </main>
@endsection

@section('script')


@endsection
