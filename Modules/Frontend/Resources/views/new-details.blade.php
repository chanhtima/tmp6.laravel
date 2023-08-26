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
            'name'=>'News & Event',
            'url'=>'new-events',
        ],
        [
            'id'=>'2',
            'name'=>'News & Event Detail',
            'url'=>'new-details',
        ],
    ]
@endphp

@section('content')
<main class="bg-all ">
    <div class="py-8 lg:py-12">
        <div class="container ">
            <div class="flex items-center space-x-1">
                <x-frontend::breadcrumbs.BreadcrumbsBasic
                    :datas="$pageNav"
                ></x-frontend>
            </div>
            <div class="flex items-center justify-center space-x-2 mt-8">
                <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2.125" y="4.65625" width="12.75" height="10.625" rx="2" stroke="#003760" stroke-width="2"/>
                    <path d="M2.125 7.48958C2.125 6.71389 2.125 6.32605 2.23114 6.01337C2.431 5.42459 2.89334 4.96225 3.48212 4.76239C3.7948 4.65625 4.18264 4.65625 4.95833 4.65625H12.0417C12.8174 4.65625 13.2052 4.65625 13.5179 4.76239C14.1067 4.96225 14.569 5.42459 14.7689 6.01337C14.875 6.32605 14.875 6.71389 14.875 7.48958V7.48958H2.125V7.48958Z" fill="#003760"/>
                    <path d="M4.95825 2.53125L4.95825 4.65625" stroke="#003760" stroke-width="2" stroke-linecap="round"/>
                    <path d="M12.0417 2.53125L12.0417 4.65625" stroke="#003760" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <span>
                    20-Jun-2023
                </span> 
            </div>
            <x-frontend::texteditor.TextEditor>
                @slot('content')
                    <div class="flex items-center flex-wrap -m-2 xl:-m-4">
                        <div class="w-full p-2 xl:p-4">
                            <h2 class="home-title mb-4 text-center">News & Event Detail</h2>
                            <img class=" rounded-xl mx-auto sm:w-3/4 mb-8" src="{{ Module::asset("frontend:img/doctor-examining-womans-face-cosmetic-treatment 3.png") }}" alt="About">
                            <p >Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam </p>
                        </div>
                        <div class="w-full lg:w-1/2 p-2 xl:p-4">
                            <h5 class="mb-2"><b>Lorem ipsum dolor sit amets, consectetuer adipiscing elit.</b></h5>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ullamcorper suscipit lobortis</li>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim  quis nostrud exerci tation ullamcorper suscipit lobortis</li>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci </li>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi tation ullamcorper suscipit lobortis</li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-1/2 p-2 xl:p-4">
                             <img class=" rounded-xl" src="{{ Module::asset("frontend:img/detail.png") }}" alt="About">
                        </div>
                    </div>
                @endslot
            </x-frontend>
        </div>
    </div>

    </main>
@endsection

@section('script')


@endsection
