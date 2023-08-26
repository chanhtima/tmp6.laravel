@extends('frontend::config.master')
@section('title')

@section('style')

@endsection
@php
    $pageNav = [
        [
            'id'=>'0',
            'name'=>'Home',
            'url'=>'',
        ],
        [
            'id'=>'1',
            'name'=>'Product',
            'url'=>'products',
        ],
        [
            'id'=>'2',
            'name'=>'Product name A',
            'url'=>'products-details',
        ],
];
@endphp
@section('content')


    <main class="bg-all min-h-[88vh]">
        <div class="py-8 lg:py-12">
            <div class="container ">
                <div class="flex items-center space-x-1">
                    <x-frontend::breadcrumbs.BreadcrumbsBasic
                        :datas="$pageNav"
                    ></x-frontend>
                </div>
                @php
                $productCards = [
                    [
                        'id' => '0',
                        'img' => 'img/blog-1.png',
                        'title' => 'Product Promotion Title 1',
                    ],
                    [
                        'id' => '1',
                        'img' => 'img/blog-2.png',
                        'title' => 'Product Promotion Title 2',
                    ],
                 
                    [
                        'id' => '3',
                        'img' => 'img/blog-3.png',
                        'title' => 'Product Promotion Title 1',
                    ],
                    [
                        'id' => '4',
                        'img' => 'img/blog-4.png',
                        'title' => 'Product Promotion Title 2',
                    ],
                    [
                        'id' => '5',
                        'img' => 'img/blog-1.png',
                        'title' => 'Product Promotion Title 1',
                    ],
                    [
                        'id' => '6',
                        'img' => 'img/blog-2.png',
                        'title' => 'Product Promotion Title 2',
                    ],
                 
                    [
                        'id' => '7',
                        'img' => 'img/blog-3.png',
                        'title' => 'Product Promotion Title 1',
                    ],
                    [
                        'id' => '8',
                        'img' => 'img/blog-4.png',
                        'title' => 'Product Promotion Title 2',
                    ],

                  
                  
                ];
            @endphp
        
                <div class="flex flex-wrap m-[-1rem] pt-8">
                    <div class=" w-full lg:w-1/2 p-4">
                        @include('frontend::layouts.product.ProductDetailThumbnails')
                    </div>
                    <div class="w-full lg:w-1/2 p-4">
                        <h2 class="home-title mb-2">Product name A</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ullamcorper suscipit lobortis</p>
                        <div class="flex flex-wrap items-start flex-col sm:flex-row mt-4">
                            <div class="w-full sm:w-1/3 pb-1 sm:p-2"> <h5 class=" font-semibold">Lorem ipsum</h5></div>
                            <div class="w-full sm:w-2/3 pb-4 sm:p-2"> <p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ullamcorper suscipit lobortis</p></div>
                            <div class="w-full sm:w-1/3 pb-1 sm:p-2"> <h5 class=" font-semibold">Lorem ipsum</h5></div>
                            <div class="w-full sm:w-2/3 pb-4 sm:p-2"> <p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p></div>
                            <div class="w-full sm:w-1/3 pb-1 sm:p-2"> <h5  class=" font-semibold">Lorem ipsum</h5></div>
                            <div class="w-full sm:w-2/3 pb-4 sm:p-2"> <h3 >12,000</h3></div>
                           
                        </div>
                    </div>
                </div>
            </div>
       
        </div>
    
    </main>
@endsection

@section('script')
<script src="{{ Module::asset('frontend:js/product.min.js') }}"></script>

@endsection
