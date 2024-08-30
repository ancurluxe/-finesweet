@extends('frontend.layout.master')

@section('content')
    {{-- main --}}
    <section>
        <div class="relative">
            <img class="w-full h-[100vh]" src="{{ asset('frontend/images/banner.png') }}" alt="">
            <div class="absolute lg:w-[75%] 2xl:w-full  md:w-[70%] top-[20%] container ">
                <h1 class=" lg:text-6xl sm:text-4xl 2xl:text-9xl text-3xl   font-bold  text-white ">Save the environment
                    today for a better
                    tomorrow</h1>
                <div class="pt-12 2xl:pt-24 flex gap-5 items-center">
                    <button class="btn-hover bg-white px-5 p-3 2xl:p-5 2xl:px-8 rounded-md font-medium 2xl:text-4xl">What We
                        Do</button>
                    <button class="">
                        <i class="ri-play-circle-line text-white text-lg 2xl:text-4xl hover:text-[#ccf6db]"> Play video</i>
                    </button>
                </div>
            </div>

            <div class="container flex items-center  gap-3 absolute  bottom-5 2xl:left-[15%] xl:left- ">
                <p class="text-white 2xl:text-2xl">23,800 trees planted</p>
                <p class="w-[65%]  h-[1px] bg-white "></p>
                <p class="text-white 2xl:text-2xl">5840 donations collected</p>
            </div>
        </div>
    </section>

    {{-- KNOW ABOUT US --}}
    <section class="container py-10">
        <div class="flex justify-center flex-wrap lg:flex-nowrap">
            <div>
                <div class="flex gap-4 items-center py-10">
                    <p class="w-16  h-[1px] bg-[#1D2130]"></p>
                    <p class="text-sm font-semibold text-[#1D2130]">KNOW ABOUT US</p>
                </div>

                <div class="container ">
                    <div class="space-y-5">
                        <p class="text-4xl col-span-2 font-bold">We help nature smile and survive everywhere</p>
                        <p class="col-span-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                            enim in eros
                            elementum
                            tristique.</p>
                        <p>
                            Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae
                            erat.
                            Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
                            tristique
                            posuere.</p>
                        <button class=" btn-4 raise px-5 p-2 rounded-md text-white font-medium more-button">Learn
                            more</button>
                    </div>
                </div>
            </div>
            <div class="mt-10 relative">
                <img class="h-96 rounded-md" src="{{ asset('frontend/images/friend.png') }}" alt="">
                <div class="absolute bottom[50%] top-[40%] left-[45%] ">
                    <a href="https://www.youtube.com/watch?v=gcUHp8Wm7D0"><i
                            class="ri-play-circle-fill text-5xl text-white"></i> </a>
                </div>
            </div>
        </div>
    </section>

    {{-- >Our supporters --}}
    <section class="container pb-10">
        <div class="flex gap-2 items-center py-5">
            <p class="text-sm font-semibold text-[#1D2130]">Our supporters</p>
            <p class="w-[90%]  h-[1px] bg-[#E5E5E5]"></p>
        </div>

        {{-- Marqueee --}}
        <div class="marquee grid grid-cols-5 gap-8">
            <img class="md:w-[60%] w-96" src="{{ asset('frontend/images/thunderbird.png') }}" alt="">
            <img class="md:w-[60%] w-96" src="{{ asset('frontend/images/thunderbird.png') }}" alt="">
            <img class="md:w-[60%] w-96" src="{{ asset('frontend/images/thunderbird.png') }}" alt="">
            <img class="md:w-[60%] w-96" src="{{ asset('frontend/images/thunderbird.png') }}" alt="">
            <img class="md:w-[60%] w-96" src="{{ asset('frontend/images/thunderbird.png') }}" alt="">
        </div>
    </section>

    {{-- WHAT WE DO --}}
    <section class=" bg-[#e8fcef] pb-10">
        <div class="container ">
            <div class="flex gap-4 items-center pt-6">
                <p class="w-16  h-[1px] bg-[#1D2130]"></p>
                <p class="text-sm font-semibold text-[#1D2130]">WHAT WE DO</p>
            </div>

            <div class=" flex gap-7 justify-center flex-wrap lg:flex-nowrap ">
                <div class="container">
                    <div class="py-5">
                        <p class="text-4xl font-bold text-[#1D2130] pb-3">We care for earth, care for the coming birth</p>
                        <p class="text-[#525560]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                            varius enim in eros
                            elementum
                            tristique.</p>
                    </div>

                    <div class="border-l-2 px-2 space-y-3">
                        {{-- 1 --}}
                        <div class="flex gap-3 ">
                            <div>
                                <i class="ri-plant-fill text-[#DDFFDF] bg-[#83D187] p-1 rounded-md "></i>
                            </div>
                            <div>
                                <p class="text-xl font-bold text-[#1D2130] pb-1">Build Healthy Cities</p>
                                <p class="text-[#525560]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse varius enim in
                                    eros.
                                </p>
                            </div>
                        </div>
                        {{-- 2 --}}
                        <div class="flex gap-3 ">
                            <div>
                                <i class="ri-mist-fill text-[#DDFFDF] bg-[#83D187] p-1 rounded-md "></i>
                            </div>
                            <div>
                                <p class="text-xl font-bold text-[#1D2130] pb-1">Build Healthy Cities</p>
                                <p class="text-[#525560]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse varius enim in
                                    eros.
                                </p>
                            </div>
                        </div>
                        {{-- 3 --}}
                        <div class="flex gap-3 ">
                            <div>
                                <i class="ri-shield-check-line text-[#DDFFDF] bg-[#83D187] p-1 rounded-md "></i>
                            </div>
                            <div>
                                <p class="text-xl font-bold text-[#1D2130] pb-1">Build Healthy Cities</p>
                                <p class="text-[#525560]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse varius enim in
                                    eros.
                                </p>
                            </div>
                        </div>
                        {{-- 4 --}}
                        <div class="flex gap-3 ">
                            <div>
                                <i class="ri-building-fill text-[#DDFFDF] bg-[#83D187] p-1 rounded-md "></i>
                            </div>
                            <div>
                                <p class="text-xl font-bold text-[#1D2130] pb-1">Build Healthy Cities</p>
                                <p class="text-[#525560]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse varius enim in
                                    eros.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <img class="h-full rounded-md" src="{{ asset('frontend/images/what we do.png') }}" alt="">
                </div>
            </div>
        </div>

    </section>

    {{-- projects we've done --}}
    <section class="container py-10">
        <div class="flex gap-4 items-center py-6">
            <p class="w-16  h-[1px] bg-[#1D2130]"></p>
            <p class="text-sm font-semibold text-[#1D2130]">PROJECTS WE HAVE DONE</p>
        </div>
        <p class=" container text-4xl text-[#1D2130] font-bold ">We are Creating sustainable society, for everyone and
            forever.</p>

        <div class="grid items-center lg:grid-cols-3 md:grid-cols-2 gap-5 my-10">
            {{-- card-1 --}}
            <div class="relative">
                <img class="rounded-lg h-96 " src="{{ asset('frontend/images/banner.png') }}" alt="">


                <div class="absolute bg-black opacity-5 inset-0 "> </div>
                <div class=" absolute top-[20%] left-[5%]  hover:-translate-y-7 ">
                    <div class=" p-4 space-y-2  ">
                        <p class="text-2xl text-white font-bold">Mission 40K: Tree plantation</p>
                        <p class="text-white font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Suspendisse
                            varius enim
                            in eros.</p>
                    </div>
                    <div class=" pt-10 pl-4">
                        <button class="btn-hover raise px-4 p-2  more-button bg-white rounded-md font-medium ">See
                            more</button>
                    </div>
                </div>
            </div>
            {{-- card-2 --}}
            <div class="relative">
                <img class="rounded-lg h-96 w-full " src="{{ asset('frontend/images/card-2.png') }}" alt="">


                <div class="absolute bg-black opacity-5 inset-0 "> </div>
                <div class=" absolute top-[20%] left-[5%]  hover:-translate-y-7 ">
                    <div class=" p-4 space-y-2  ">
                        <p class="text-2xl text-white font-bold">Mission 40K: Tree plantation</p>
                        <p class="text-white font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Suspendisse
                            varius enim
                            in eros.</p>
                    </div>
                    <div class=" pt-10 pl-4">
                        <button class="btn-hover raise px-4 p-2  more-button bg-white rounded-md font-medium ">See
                            more</button>
                    </div>
                </div>
            </div>
            {{-- card-3 --}}
            <div class="relative">
                <img class="rounded-lg h-96 " src="{{ asset('frontend/images/banner.png') }}" alt="">


                <div class="absolute bg-black opacity-5 inset-0 "> </div>
                <div class=" absolute top-[20%] left-[5%]  hover:-translate-y-7 ">
                    <div class=" p-4 space-y-2  ">
                        <p class="text-2xl text-white font-bold">Mission 40K: Tree plantation</p>
                        <p class="text-white font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Suspendisse
                            varius enim
                            in eros.</p>
                    </div>
                    <div class=" pt-10 pl-4">
                        <button class="btn-hover raise px-4 p-2  more-button bg-white rounded-md font-medium ">See
                            more</button>
                    </div>
                </div>
            </div>
    </section>

    {{-- contribute --}}
    <section class="container">
        <div class="relative">
            <img class="rounded-lg w-full h-72 object-cover  " src="{{ asset('frontend/images/contribute.png') }}"
                alt="">

            <div class=" bg-black absolute inset-0 opacity-[42%] rounded-lg"> </div>

            <div class="absolute top-[15%] left-[20%] bottom-[30%] right-[20%] p-4 space-y-2  ">
                <p class=" text-white font-semibold sm:text-3xl lg:text-4xl xl:text-5xl text-center">You can contribute to
                    make the
                    environment
                    greener!</p>
            </div>
            <div class="absolute bottom-[18%] left-[30%] lg:left-[35%] space-x-5 space-y-5 ">
                <button class="join bg-[#70C174] px-5 rounded-md md:font-medium text-white  p-2">Join as a
                    volunteer</button>
                <button class="bg-white px-10 md:px-5 rounded-md font-medium  p-2">Donate</button>
            </div>
        </div>
    </section>

    {{-- read our news --}}
    <section class="container py-20">
        <div class="flex gap-5 items-center py-5">
            <p class="text-2xl font-semibold text-[#1D2130]"> READ OUR NEWS</p>
            <p class="w-[80%]  h-[1px] bg-[#E5E5E5]"></p>
        </div>

        <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            {{-- card-1 --}}
            <div class="bg-white   hover-shadow p-1">
                <img class="rounded-lg h-44 w-full object-cover " src="{{ asset('frontend/images/card-1.png') }}"
                    alt="">
                <div class="py-3 space-y-3 ">
                    <p class="font-semibold ">Don’t destroy greenery and don’t spoil scenery</p>
                    <p class="text-[#525560] ">Lorem ipsum dolor sit amet conse adipisicing elit. Voluptatem item qui,
                    </p>
                </div>
            </div>
            {{-- card-2 --}}
            <div class="bg-white hover-shadow p-1">
                <img class="rounded-lg h-44 w-full object-cover " src="{{ asset('frontend/images/contribute.png') }}"
                    alt="">
                <div class="py-3 space-y-3">
                    <p class="font-semibold ">Don’t destroy greenery and don’t spoil scenery</p>
                    <p class="text-[#525560] text-justify">Lorem ipsum dolor sit amet conse adipisicing elit. Voluptatem
                        item qui,
                    </p>
                </div>
            </div>
            {{-- card-3 --}}
            <div class="bg-white  hover-shadow p-1">
                <img class="rounded-lg h-44 w-full object-cover " src="{{ asset('frontend/images/card-2.png') }}"
                    alt="">
                <div class="py-3 space-y-3">
                    <p class="font-semibold ">Don’t destroy greenery and don’t spoil scenery</p>
                    <p class="text-[#525560] text-justify">Lorem ipsum dolor sit amet conse adipisicing elit. Voluptatem
                        item qui,
                    </p>
                </div>
            </div>
            {{-- card-4 --}}
            <div class="bg-white  hover-shadow p-1">
                <img class="rounded-lg h-44 w-full object-cover " src="{{ asset('frontend/images/water.png') }}"
                    alt="">
                <div class="py-3 space-y-3">
                    <p class="font-semibold ">Don’t destroy greenery and don’t spoil scenery</p>
                    <p class="text-[#525560] text-justify">Lorem ipsum dolor sit amet conse adipisicing elit. Voluptatem
                        item qui,
                    </p>
                </div>
            </div>

        </div>
    </section>
    {{-- our events --}}
    <section class="container pb-10">
        <div class="flex gap-5 items-center py-5">
            <p class="text-2xl font-semibold text-[#1D2130]"> OUR EVENTS</p>
            <p class="w-[85%]  h-[1px] bg-[#E5E5E5]"></p>
        </div>

        <div class="grid lg:grid-cols-2 gap-5 py-10">
            {{-- event card-1 --}}
            <div
                class="raise hover:shadow-lg hover:shadow-green-800 p-6 flex  items-center gap-3 shadow-md bg-[#BEF3C0] rounded-lg">

                <div class="mb-12">
                    <p class="text-4xl font-semibold"> 23</p>
                    <p class=" font-medium">SEP</p>
                </div>
                <div>
                    <div class="flex gap-2 items-center ">
                        <p class="text-sm font-medium text-[#1D2130]"> NEXT EVENTS</p>
                        <p class="w-[10%]  h-[1px] bg-[#1D2130]"></p>
                    </div>

                    <div class="flex items-center py-2">
                        <p class="sm:text-3xl text-xl font-semibold text-[#1D2130]">Say no to plastic usage and save the
                            planet
                        </p>
                        <div>
                            <i class="ri-arrow-right-line text-[#1D2130] bg-white rounded-full p-2 sm:text-2xl"></i>
                        </div>
                    </div>

                </div>
            </div>
            {{-- event-card-2 --}}
            <div
                class=" raise hover:shadow-lg hover:shadow-green-800 p-6 flex items-center gap-3 shadow-md bg-[#BEF3C0] rounded-lg">

                <div class="mb-12">
                    <p class="text-4xl font-semibold"> 23</p>
                    <p class=" font-medium">SEP</p>
                </div>
                <div>
                    <div class="flex gap-2 items-center ">
                        <p class="text-sm font-medium text-[#1D2130]"> NEXT EVENTS</p>
                        <p class="w-[10%]  h-[1px] bg-[#1D2130]"></p>
                    </div>

                    <div class="flex items-center py-2">
                        <p class="sm:text-3xl text-xl  font-semibold text-[#1D2130]">Say no to plastic usage and save the
                            planet
                        </p>
                        <div>
                            <i class="ri-arrow-right-line text-[#1D2130] bg-white rounded-full p-2 sm:text-2xl"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    {{-- teams --}}
    <section class="container pb-20">
        <div class="text-center">
            <p class="text-5xl font-bold text-[#1D2130]">Meet our team</p>
            <p class="text-[#525560] ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita recusandae, vero
                odio error suscipit enim quasi dibus.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 py-8">
            {{-- card-1 --}}
            <div class="card-hover ">
                <div>
                    <img class="h-72  w-full  object-cover rounded-lg" src="{{ asset('frontend/images/team-1.png') }}"
                        alt="">
                </div>
                <div class="text-center space-y-2 p-2">
                    <p class="text-[#1D2130] text-xl font-semibold">Leonard John Davies</p>
                    <p class="text-[#7e7f85] font-medium">Cofounder, CEO</p>
                    <div class="text-[#525560] text-xl space-x-3">
                        <i class="ri-facebook-circle-fill"></i>
                        <i class="ri-twitter-fill"></i>
                        <i class="ri-linkedin-box-fill"></i>
                    </div>
                </div>
            </div>
            {{-- card-2 --}}
            <div class="card-hover ">
                <div>
                    <img class="h-72  w-full object-cover  rounded-lg" src="{{ asset('frontend/images/team-2.png') }}"
                        alt="">
                </div>
                <div class="text-center space-y-2 p-2">
                    <p class="text-[#1D2130] text-xl font-semibold">Leonard John Davies</p>
                    <p class="text-[#7e7f85] font-medium">Cofounder, CEO</p>
                    <div class="">
                        <button><i class="ri-facebook-circle-fill text-[#525560] text-xl space-x-3 "></i>
                        </button>
                        <button><i class="ri-twitter-fill text-[#525560] text-xl space-x-3"></i>
                        </button>
                        <button><i class="ri-linkedin-box-fill text-[#525560] text-xl space-x-3"></i>
                        </button>
                    </div>
                </div>
            </div>
            {{-- card-3 --}}
            <div class="card-hover ">
                <div>
                    <img class="h-72 w-full object-cover   rounded-lg" src="{{ asset('frontend/images/team-3.png') }}"
                        alt="">
                </div>
                <div class="text-center space-y-2 p-2">
                    <p class="text-[#1D2130] text-xl font-semibold">Leonard John Davies</p>
                    <p class="text-[#7e7f85] font-medium">Cofounder, CEO</p>
                    <div class="text-[#525560] text-xl space-x-3">
                        <i class="ri-facebook-circle-fill"></i>
                        <i class="ri-twitter-fill"></i>
                        <i class="ri-linkedin-box-fill"></i>
                    </div>
                </div>
            </div>
            {{-- card-4 --}}
            <div class="card-hover ">
                <div>
                    <img class="h-72 w-full object-cover rounded-lg" src="{{ asset('frontend/images/team-4.png') }}"
                        alt="">
                </div>
                <div class="text-center space-y-2 p-2">
                    <p class="text-[#1D2130] text-xl font-semibold">Leonard John Davies</p>
                    <p class="text-[#7e7f85] font-medium">Cofounder, CEO</p>
                    <div class="text-[#525560] text-xl space-x-3">
                        <i class="ri-facebook-circle-fill"></i>
                        <i class="ri-twitter-fill"></i>
                        <i class="ri-linkedin-box-fill"></i>
                    </div>
                </div>
            </div>
            {{-- card-5 --}}
            <div class="card-hover ">
                <div>
                    <img class="h-72 object-cover  w-full rounded-lg" src="{{ asset('frontend/images/team-1.png') }}"
                        alt="">
                </div>
                <div class="text-center space-y-2 p-2">
                    <p class="text-[#1D2130] text-xl font-semibold">Leonard John Davies</p>
                    <p class="text-[#7e7f85] font-medium">Cofounder, CEO</p>
                    <div class="text-[#525560] text-xl space-x-3">
                        <i class="ri-facebook-circle-fill"></i>
                        <i class="ri-twitter-fill"></i>
                        <i class="ri-linkedin-box-fill"></i>
                    </div>
                </div>
            </div>
            {{-- card-6 --}}
            <div class="card-hover ">
                <div>
                    <img class="h-72 w-full object-cover  rounded-lg" src="{{ asset('frontend/images/team-4.png') }}"
                        alt="">
                </div>
                <div class="text-center space-y-2 p-2">
                    <p class="text-[#1D2130] text-xl font-semibold">Leonard John Davies</p>
                    <p class="text-[#7e7f85] font-medium">Cofounder, CEO</p>
                    <div class="text-[#525560] text-xl space-x-3">
                        <i class="ri-facebook-circle-fill"></i>
                        <i class="ri-twitter-fill"></i>
                        <i class="ri-linkedin-box-fill"></i>
                    </div>
                </div>
            </div>
            {{-- card-7 --}}
            <div class="card-hover ">
                <div>
                    <img class="h-72 w-full object-cover  rounded-lg" src="{{ asset('frontend/images/team-3.png') }}"
                        alt="">
                </div>
                <div class="text-center space-y-2 p-2">
                    <p class="text-[#1D2130] text-xl font-semibold">Leonard John Davies</p>
                    <p class="text-[#7e7f85] font-medium">Cofounder, CEO</p>
                    <div class="text-[#525560] text-xl space-x-3">
                        <i class="ri-facebook-circle-fill"></i>
                        <i class="ri-twitter-fill"></i>
                        <i class="ri-linkedin-box-fill"></i>
                    </div>
                </div>
            </div>
            {{-- card-8 --}}
            <div class="card-hover ">
                <div>
                    <img class="h-72 w-full object-cover  rounded-lg" src="{{ asset('frontend/images/team-2.png') }}"
                        alt="">
                </div>
                <div class="text-center space-y-2 p-2">
                    <p class="text-[#1D2130] text-xl font-semibold">Leonard John Davies</p>
                    <p class="text-[#7e7f85] font-medium">Cofounder, CEO</p>
                    <div class="text-[#525560] text-xl space-x-3">
                        <i class="ri-facebook-circle-fill"></i>
                        <i class="ri-twitter-fill"></i>
                        <i class="ri-linkedin-box-fill"></i>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- <section class="flex justify-center">
        <div class="card card--1">

            <div class="card__img">
                <img src="{{ asset('frontend/images/team-2.png') }}" alt="">
            </div>

            <a href="#" class="card_link">
                <div class="card__img--hover"></div>
            </a>
            <div class="card__info">
                <span class="card__category"> Recipe</span>
                <h3 class="card__title">Crisp Spanish tortilla Matzo brei</h3>
                <span class="card__by">by <a href="#" class="card__author" title="author">Celeste Mills</a></span>
            </div>
        </div>
    </section> --}}

    {{-- testimonial --}}
    <section class="py-10 bg-[#e5fae7]">
        <div class="container">
            <div class="text-center pb-16 space-y-3">
                <p class="text-5xl font-bold text-[#1D2130]">Testimonials</p>
                <p class="text-[#525560] ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita recusandae,
                    vero
                    odio error suscipit enim quasi dibus.</p>
            </div>
            <div class="  grid grid-cols-1 gap-x-6 gap-y-12 md:grid-cols-2 lg:grid-cols-3">
                {{-- card-1 --}}
                <div class=" w-full relative bg-white  border-red-800 border-2 p-5 rounded-t-[120px]">

                    <div class="absolute -top-12 right-0 bg-red-800 h-[132px] w-[132px]  rounded-t-full rounded-br-full">
                    </div>
                    <img class=" absolute -top-12 right-0 h-32 rounded-t-full rounded-br-full"
                        src="{{ asset('frontend/images/anisha.png') }}" alt="">
                    <div class="flex gap-3 justify-end items-end">
                        <div class=" pt-10 lg:pt-16 xl:pt-10 pl-3">
                            <div class="flex gap-2">
                                <p class="text-xl font-medium text-red-800">Anisha</p>
                                <p class="text-xl font-medium">Mishra</p>
                            </div>

                            <p class="text-sm ">Founder</p>

                            <p class="pt-2 text-justify">She is a CEO who leads with dedication,
                                shaping success in all endeavors.</p>
                            {{-- </div> --}}
                        </div>
                        <div class="text-[#525560]  ">
                            <i class="ri-facebook-circle-fill rounded-full bg-gray-100 p-  text-xl"></i>
                            <i class="ri-twitter-fill  rounded-full bg-gray-100 p-  text-xl my-4"></i>
                            <i class="ri-linkedin-box-fill  rounded-full bg-gray-100 p-  text-xl"></i>
                        </div>

                    </div>

                </div>

                {{-- card-2 --}}
                <div class=" w-full relative bg-white  border-red-800 border-2 p-5 rounded-t-[120px]">

                    <div class="absolute -top-12 right-0 bg-red-800 h-[132px] w-[132px]  rounded-t-full rounded-br-full">
                    </div>
                    <img class=" absolute -top-12 right-0 h-32 rounded-t-full rounded-br-full"
                        src="{{ asset('frontend/images/anisha.png') }}" alt="">
                    <div class="flex gap-3 justify-end items-end">
                        <div class=" pt-10 lg:pt-16 xl:pt-10 pl-3">
                            <div class="flex gap-2">
                                <p class="text-xl font-medium text-red-800">Anisha</p>
                                <p class="text-xl font-medium">Mishra</p>
                            </div>

                            <p class="text-sm ">Founder</p>

                            <p class="pt-2 text-justify">She is a CEO who leads with dedication,
                                shaping success in all endeavors.</p>
                            {{-- </div> --}}
                        </div>
                        <div class="text-[#525560]  ">
                            <i class="ri-facebook-circle-fill rounded-full bg-gray-100 p-  text-xl"></i>
                            <i class="ri-twitter-fill  rounded-full bg-gray-100 p-  text-xl my-4"></i>
                            <i class="ri-linkedin-box-fill  rounded-full bg-gray-100 p-  text-xl"></i>
                        </div>

                    </div>

                </div>
                {{-- card-3 --}}
                <div class=" w-full relative bg-white  border-red-800 border-2 p-5 rounded-t-[120px]">

                    <div class="absolute -top-12 right-0 bg-red-800 h-[132px] w-[132px]  rounded-t-full rounded-br-full">
                    </div>
                    <img class=" absolute -top-12 right-0 h-32 rounded-t-full rounded-br-full"
                        src="{{ asset('frontend/images/anisha.png') }}" alt="">
                    <div class="flex gap-3 justify-end items-end">
                        <div class=" pt-10 lg:pt-16 xl:pt-10 pl-3">
                            <div class="flex gap-2">
                                <p class="text-xl font-medium text-red-800">Anisha</p>
                                <p class="text-xl font-medium">Mishra</p>
                            </div>

                            <p class="text-sm ">Founder</p>

                            <p class="pt-2 text-justify">She is a CEO who leads with dedication,
                                shaping success in all endeavors.</p>
                            {{-- </div> --}}
                        </div>
                        <div class="text-[#525560]  ">
                            <i class="ri-facebook-circle-fill rounded-full bg-gray-100 p-  text-xl"></i>
                            <i class="ri-twitter-fill  rounded-full bg-gray-100 p-  text-xl my-4"></i>
                            <i class="ri-linkedin-box-fill  rounded-full bg-gray-100 p-  text-xl"></i>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </section>

    {{-- pdes-team --}}
    <section class="container py-20">
        <div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-y-14  gap-x-12">
            {{-- card-1 --}}
            <div class="shadow-lg p-3 mr-8 lg:mr-0 relative rounded-md lg:mx-0 mx-5">
                <img class="h-80 w-[85%] object-cover rounded-lg absolute -top-8  -right-4  lg:mx-0"
                    src="{{ asset('frontend/images/team-1.png') }}" alt="">
                <div class="text-[#525560] flex flex-col ">
                    <i class="ri-facebook-circle-fill rounded-full bg-white p-1  text-xl"></i>
                    <i class="ri-twitter-fill  rounded-full bg-white p-1  text-xl my-4"></i>
                    <i class="ri-linkedin-box-fill  rounded-full bg-white p-1  text-xl"></i>
                </div>
                <div class="pl-16 md:pl-28 lg:pl-16 pt-36">
                    <p class="text-2xl ">Sabina karki</p>
                    <p class="text-lg">ceo</p>
                    <p class="text-[#525560]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit reprehenderit
                        error quis aliquam saepe
                        totam vero rem? Quidem vitae ipsum itaque, magni mollitia, in nulla perspiciam?</p>
                </div>
            </div>
            {{-- card-2 --}}
            <div class="shadow-lg p-3 mr-8 lg:mr-0 relative rounded-md lg:mx-0 mx-5">
                <img class="h-80 w-[85%] object-cover rounded-lg absolute -top-8  -right-4  lg:mx-0"
                    src="{{ asset('frontend/images/team-1.png') }}" alt="">
                <div class="text-[#525560] flex flex-col ">
                    <i class="ri-facebook-circle-fill rounded-full bg-white p-1  text-xl"></i>
                    <i class="ri-twitter-fill  rounded-full bg-white p-1  text-xl my-4"></i>
                    <i class="ri-linkedin-box-fill  rounded-full bg-white p-1  text-xl"></i>
                </div>
                <div class="pl-16 md:pl-28 lg:pl-16 pt-36">
                    <p class="text-2xl ">Sabina karki</p>
                    <p class="text-lg">ceo</p>
                    <p class="text-[#525560]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit reprehenderit
                        error quis aliquam saepe
                        totam vero rem? Quidem vitae ipsum itaque, magni mollitia, in nulla perspiciam?</p>
                </div>
            </div>
            {{-- card-3 --}}
            <div class="shadow-lg p-3 mr-8 lg:mr-0 relative rounded-md lg:mx-0 mx-5">
                <img class="h-80 w-[85%] object-cover rounded-lg absolute -top-8  -right-4  lg:mx-0"
                    src="{{ asset('frontend/images/team-1.png') }}" alt="">
                <div class="text-[#525560] flex flex-col ">
                    <i class="ri-facebook-circle-fill rounded-full bg-white p-1  text-xl"></i>
                    <i class="ri-twitter-fill  rounded-full bg-white p-1  text-xl my-4"></i>
                    <i class="ri-linkedin-box-fill  rounded-full bg-white p-1  text-xl"></i>
                </div>
                <div class="pl-16 md:pl-28 lg:pl-16 pt-36">
                    <p class="text-2xl ">Sabina karki</p>
                    <p class="text-lg">ceo</p>
                    <p class="text-[#525560]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit reprehenderit
                        error quis aliquam saepe
                        totam vero rem? Quidem vitae ipsum itaque, magni mollitia, in nulla perspiciam?</p>
                </div>
            </div>
            {{-- card-4 --}}
            <div class="shadow-lg p-3 mr-8 lg:mr-0 relative rounded-md lg:mx-0 mx-5">
                <img class="h-80 w-[85%] object-cover rounded-lg absolute -top-8  -right-4  lg:mx-0"
                    src="{{ asset('frontend/images/team-1.png') }}" alt="">
                <div class="text-[#525560] flex flex-col ">
                    <i class="ri-facebook-circle-fill rounded-full bg-white p-1  text-xl"></i>
                    <i class="ri-twitter-fill  rounded-full bg-white p-1  text-xl my-4"></i>
                    <i class="ri-linkedin-box-fill  rounded-full bg-white p-1  text-xl"></i>
                </div>
                <div class="pl-16 md:pl-28 lg:pl-16 pt-36">
                    <p class="text-2xl ">Sabina karki</p>
                    <p class="text-lg">ceo</p>
                    <p class="text-[#525560]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit reprehenderit
                        error quis aliquam saepe
                        totam vero rem? Quidem vitae ipsum itaque, magni mollitia, in nulla perspiciam?</p>
                </div>
            </div>
            {{-- card-5 --}}
            <div class="shadow-lg p-3 mr-8 lg:mr-0 relative rounded-md lg:mx-0 mx-5">
                <img class="h-80 w-[85%] object-cover rounded-lg absolute -top-8  -right-4  lg:mx-0"
                    src="{{ asset('frontend/images/team-1.png') }}" alt="">
                <div class="text-[#525560] flex flex-col ">
                    <i class="ri-facebook-circle-fill rounded-full bg-white p-1  text-xl"></i>
                    <i class="ri-twitter-fill  rounded-full bg-white p-1  text-xl my-4"></i>
                    <i class="ri-linkedin-box-fill  rounded-full bg-white p-1  text-xl"></i>
                </div>
                <div class="pl-16 md:pl-28 lg:pl-16 pt-36">
                    <p class="text-2xl ">Sabina karki</p>
                    <p class="text-lg">ceo</p>
                    <p class="text-[#525560]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit reprehenderit
                        error quis aliquam saepe
                        totam vero rem? Quidem vitae ipsum itaque, magni mollitia, in nulla perspiciam?</p>
                </div>
            </div>

        </div>
    </section>


    <!-- Swiper -->
    <section class="container py-20">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper ">
                <div class="swiper-slide hover:rounded-lg">
                    <img class="img h-96 rounded-lg object-cover   "
                        src="{{ asset('frontend/images/20230809164406file-thailand-emerald-buddha-temple-94wh8kbsw7xs00i9.jpg') }}"
                        alt="">


                    <div class="bg absolute rounded-b-md bg-black opacity-[70%]   bottom-0 left-0 w-full h-[20%] ">
                    </div>
                    <div class="">
                        <p class="text-2xl text-white font-semibold  absolute bottom-14 left-3 up ">Bankok and
                            Krabi
                        </p>
                        <div class="flex gap-1 absolute bottom-8 left-3  up">
                            <i class="ri-star-fill text-yellow-400 text-lg"></i>
                            <i class="ri-star-fill text-yellow-400 text-lg"></i>
                            <i class="ri-star-fill text-yellow-400 text-lg"></i>
                            <i class="ri-star-fill text-yellow-400 text-lg"></i>
                            <i class="ri-star-fill text-yellow-400 text-lg"></i>
                        </div>
                        <p class="text-white text-end absolute bottom-8 right-3 up  text-sm">Rs 96,000</p>

                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="h-96 rounded-lg"
                        src="{{ asset('frontend/images/20230809161516file-kuala-lumpur-twins-malaysia-petronas-twin-towers.jpg') }}"
                        alt="">
                </div>
                <div class="swiper-slide">
                    <img class="h-96 rounded-lg"
                        src="{{ asset('frontend/images/20230809161516file-kuala-lumpur-twins-malaysia-petronas-twin-towers.jpg') }}"
                        alt="">
                </div>
                <div class="swiper-slide">
                    <img class="h-96 rounded-lg"
                        src="{{ asset('frontend/images/20230809161516file-kuala-lumpur-twins-malaysia-petronas-twin-towers.jpg') }}"
                        alt="">
                </div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>
            {{-- <div class="swiper-button-next"></div> --}}
            {{-- <div class="swiper-button-prev"></div> --}}
            <div class="swiper-pagination "></div>
            <div class="autoplay-progress">
                <svg viewBox="0 0 48 48">
                    {{-- <circle cx="24" cy="24" r="20"></circle> --}}
                </svg>
                <span></span>
            </div>
        </div>


    </section>




    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 20,
            centeredSlides: true,
            // autoplay: {
            //     delay: 1000,
            //     disableOnInteraction: false
            // },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            }
        });
    </script>
@endsection
