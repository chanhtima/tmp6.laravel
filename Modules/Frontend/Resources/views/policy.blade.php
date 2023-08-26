@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
<main class="bg-all min-h-[88vh]">
        <div class="bg-gradient-to-r  from-primary-focus py-6 ">
            <div class="container">
                  <h2 class=" home-title text-white"> PRIVACY POLICY</h2>
            </div>
        </div>
        <div class="container py-8 lg:py-12">
            <x-frontend::texteditor.TextEditor>
                @slot('content')
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
                            <br>
                            <h5 class="mb-2"><b>Lorem ipsum dolor sit amets, consectetuer adipiscing elit.</b></h5>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ullamcorper suscipit lobortis</li>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim  quis nostrud exerci tation ullamcorper suscipit lobortis</li>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci </li>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi tation ullamcorper suscipit lobortis</li>
                            </ul>
                @endslot
            </x-frontend>
        </div>
                
    </main>
@endsection

@section('script')


@endsection
