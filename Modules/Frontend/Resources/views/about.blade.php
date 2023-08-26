@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
<main class="bg-all">
    <div class="bg-gradient-to-r  from-primary-focus py-6 ">
        <div class="container">
            <h2 class="home-title  text-white">ABOUT</h2>
        </div>
    </div>
    <div class="container py-8 lg:py-12">
                <x-frontend::texteditor.TextEditor>
                    @slot('content')
                        <div class="flex items-center flex-wrap -m-2 xl:-m-4 ">
                            <div class="w-full lg:w-1/2 p-2 pt-0 xl:p-4 ">
                                <img class="mx-auto" src="{{ Module::asset("frontend:img/about_3.png") }}" alt="About">
                            </div>
                            <div class="w-full lg:w-1/2 p-2 xl:p-4">
                                <h2 class="home-title">ABOUT</h2>
                                <h2 class="home-title">SENORITA CLINIC</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                </p>
                               
                            </div>
                            <div class="w-full p-2 xl:p-4">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="w-full lg:w-1/2 p-2 xl:p-4">
                                <h4 class=" font-semibold">Lorem ipsum dolor sit amet</h4>
                                <h2 class="home-title">SENORITA CLINIC</h2>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                </p>
                        
                            </div>
                            <div class="w-full lg:w-1/2 p-2 xl:p-4">
                                <img class=" rounded-xl mx-auto" src="{{ Module::asset("frontend:img/About2.png") }}" alt="About">
                            </div>

                            <div class="w-full lg:w-1/2 p-2 xl:p-4">
                                <img class=" rounded-xl mx-auto" src="{{ Module::asset("frontend:img/futuristic-corridor 1.png") }}" alt="About">

                            </div>
                            <div class="w-full lg:w-1/2 p-2 xl:p-4">
                                <img class=" rounded-xl mx-auto" src="{{ Module::asset("frontend:img/futuristic-corridor 1.png") }}" alt="About">

                            </div>
                        </div>
                    @endslot
                </x-frontend>
          
         </div>
  
    </main>
@endsection

@section('script')


@endsection
