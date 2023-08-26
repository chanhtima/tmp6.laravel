@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
        <main >
            <div class="bg-gradient-to-r  from-primary-focus py-6">
                <div class="container">
                     <h2 class="home-title text-white">CONTACT US</h2>
                </div>
            </div>
            <div class="container pt-8 lg:py-12">
                   <div class="flex flex-col-reverse lg:flex-row  lg:relative">
                        <div class=" w-full lg:w-10/12 shadow-md">
                            <iframe class=" max-w-full w-full rounded-lg" width="600" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.3261135910216!2d100.56324906524183!3d13.75919694034272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d4918d39f69%3A0x7c82b5cfabbf1f4a!2sFortune%20Town!5e0!3m2!1sen!2sth!4v1679977584185!5m2!1sen!2sth"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="w-full mb-4 lg:mb-0 lg:w-1/3 p-6 bg-primary lg:absolute right-4 bottom-[-3rem] shadow-md rounded-lg">
                            <div class="flex items-center p-2">
                                <img class="w-10 h-10 mr-4" src="{{ Module::asset("frontend:img/icon/iconcontact-2.png") }}" alt="icon">
                                <a class=" text-white" href="{{ url('mailto:sanorita.clinic@jmail.com') }}"  >
                                  <p>sanorita.clinic@gmail.com</p> 
                                </a>
                            </div>
                            <div class="flex items-center p-2">
                                <img class="w-10 h-10 mr-4" src="{{ Module::asset('frontend:img/icon/iconcontact-3.png') }}" alt="icon">
                                <a class=" text-white" href="{{ url('tel:+668 888 888') }}" >
                                    <p> +668 888 888 (Auto)</p>
                               </a>
                            </div>
                            <div class="flex items-start p-2">
                                <img class="w-10 h-10 mr-4" src="{{ Module::asset('frontend:img/icon/iconcontact-4.png') }}" alt="icon">
                                <p class=" text-white">Señorita Clinic Fortune Town Branch 1, Ratchadaphisek Road, Din Daeng, Din Daeng, Bangkok 10400</p>

                            </div>
                        </div>
                    </div>
            </div>

            <section class="mt-8 lg:mt-12 bg-section-01-gradient">
                    <div class="container">
                        <div class="w-full sm:w-96 h-24 bg-primary flex items-center justify-center rounded-b-xl shadow-xl">
                            <h2 class="home-title text-white">GET IN TOUCH</h2>
                        </div>
                        <div class=" py-8 lg:py-12 lg:px-14 lg:w-3/4 mx-auto">
                            @include('frontend::components.form.FormBasic')
                        </div>
                    </div>
            </section>

        <x-frontend::modal.ModalBasic name="formcontact" class="w-11/12 max-w-lg ">
                @slot('content')
                <div class="p-8">

                    <img src="{{ Module::asset('frontend:img/icon/iconcheck.png') }}" alt="modal" class="w-10 mx-auto mb-4" >
                    <h2 class=" text-center mb-4"><span class=" font-semibold mr-2">ขอบคุณ</span>ข้อความของคุณถูกส่งไปเรียบร้อย</h2>
                    
                </div>
                @endslot
        </x-frontend>
        </main>
@endsection

@section('script')

@endsection
