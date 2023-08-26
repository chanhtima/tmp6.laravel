@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main class="bg-all">
        <div class="bg-gradient-to-r  from-primary-focus py-6 shadow">
            <div class="container">
                <h2 class="home-title text-white">OUR PRODUCTS</h2>
            </div>
        </div>
        <div class="container py-8 lg:py-12">
            <p class="mb-6">Lorem ipsumdolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip tincidunt ut laoreet dolore magna tincidunt </p>
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
            
            <div class="flex flex-wrap -m-3">
       
                @foreach ($productCards as $index => $card)
                    <div class="w-full xs:w-1/2 lg:w-1/3 xl:w-1/4 p-3 ">
                        <x-frontend::card.Card01Curved :img="$card['img']" :url="$card['url']" :title="$card['title']" :subtitle="$card['subtitle']">
                        </x-frontend>
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
