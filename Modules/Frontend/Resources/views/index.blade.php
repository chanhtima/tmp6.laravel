@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main>
        @include('frontend::layouts.home.HomeCarouselBanner')
        <div class=" bg-default pt-8 lg:pt-12">
            <div class="container">
                <x-frontend::texteditor.TextEditor>
                    @slot('content')
                        <div class="flex items-center flex-wrap -mx-2 xl:-mx-4">
                            <div class="w-full lg:w-1/2 px-2 xl:px-4">
                                <img class="mx-auto" src="{{ Module::asset("frontend:img/about_3.png") }}" alt="About">

                            </div>
                            <div class="w-full lg:w-1/2 p-2 xl:p-4">
                                <h2 class="home-title">ABOUT</h2>
                                <h2 class="home-title">SENORITA CLINIC</h2>
                                <p >
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                </p>
                                <div class=" flex lg:justify-end ">
                                    <x-frontend::button.ButtonIconL text="See More" url="about" class=" mt-4 lg:mt-8">
                                        @slot('icon')
                                        <img src="{{ Module::asset('frontend:img/icon/iconbutton.png') }}" >
                                        @endslot
                                    </x-frontend>
                                </div>
                            </div>
                        </div>
                    @endslot
                </x-frontend>
                
            </div>
        </div>
     
        {{--Section  Product --}}
        <div class="bg-[#FFF1E1] lg:bg-white   py-4 mt-8 lg:py-12 lg:mt-0">
            <div class="container">
                <div class="flex  flex-wrap items-center lg:relative ">
                    <div class="w-full lg:w-2/3 pt-4  lg:p-8  bg-[#FFF1E1] rounded-2xl lg:shadow-lg">
                        <div class="lg:w-1/2 lg:pr-4 lg:py-20">
                            <h2 class="home-title">OUR PRODUCTS</h2>
                            <p>Lorem ipsumdolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip tincidunt ut laoreet dolore magna tincidunt </p>
                            <div class=" hidden lg:flex  mt-2">
                                <x-frontend::button.ButtonIconL text="See More" url="products" class=" mt-4 lg:mt-8">
                                    @slot('icon')
                                    <img src="{{ Module::asset('frontend:img/icon/iconbutton.png') }}" >
                                    @endslot
                                </x-frontend>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-2/3 pt-4 lg:pt-0  lg:absolute z-2 right-0">
                        @include('frontend::layouts.home.HomeCarouselProduct')
                        <div class="flex lg:hidden pb-6 ">
                            <x-frontend::button.ButtonIconL text="See More" url="products" class=" mt-4 lg:mt-8">
                                @slot('icon')
                                <img src="{{ Module::asset('frontend:img/icon/iconbutton.png') }}" >
                                @endslot
                            </x-frontend>
                        </div>
                    </div>
                </div>
              
              </div>
        </div>
        {{--End Section  Product --}}
     
          {{--Section  NEWS & EVENTS --}}
        <div class="mt-8 lg:mt-0 bg-section-01-gradient">
            <div class="container">
                <div class="w-full  sm:w-96 h-24 bg-primary flex items-center justify-center rounded-b-xl shadow-xl">
                        <h2  class="home-title text-white">NEWS & EVENTS</h2>
                    </div>
                    <div class="flex flex-col-reverse lg:flex-col lg:px-14 py-8  lg:py-12">
                        <div class="flex lg:justify-end">
                            <x-frontend::button.ButtonIconL text="See More" url="new-events">
                                @slot('icon')
                                <img src="{{ Module::asset('frontend:img/icon/iconbutton.png') }}" >
                                @endslot
                            </x-frontend>
                        
                        </div>
                        <div class="pb-4 lg:pt-4 lg:pb-12" > 
                            {{-- co-card-02-curved-date --}}
                            @include('frontend::layouts.home.HomeCarouselNews')
                            {{-- co-card-02-curved-date --}}
                            
                        </div>
                    </div>
                </div>
            </div>
    {{--End Section  NEWS & EVENTS --}}
    </main>
    
@endsection
    
@section('script')
<script src="{{ Module::asset('frontend:js/index.min.js') }}"></script>

@endsection
    