@extends('frontend.layout.master')
@section('content')
    <section class="bg-[#EBF0F9] py-20">
        <div class="container ">
            <div class="grid lg:grid-cols-2 gap-5">
                <div>
                    <div class="flex gap-4 items-center py-5">
                        <p class="w-16  h-[1px] bg-[#1D2130]"></p>
                        <p class="text-sm font-semibold text-[#1D2130]">CONTACT US</p>
                    </div>
                    <div class="container">
                        <p class="text-5xl font-semibold text-[#1D2130]">We'd love to hear from you</p>
                        <p class="text-[#525560] py-4">Have any question in mind or want to enquire? Please feel free to contact
                            us through the form or
                            the following details.</p>
                    </div>
                </div>
                <div class="space-y-8 container">

                    <div class="space-y-2">
                        <p class="text-xl font-bold text-[#1D2130]">Let's talk!</p>
                        <div class="flex gap-6">
                            <p>+1 23 456 789</p>
                            <p>hello@finsweet.com</p>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <p class="text-xl font-bold text-[#1D2130]"> Headoffice!</p>
                        <p>Brewery Drive, Hudson, NH 03051
                            USA</p>
                    </div>

                    <div class="space-y-2">
                        <p class="text-xl font-bold text-[#1D2130]">Branch Office </p>
                        <p> Marconi St., Venice, 34293
                            Italy</p>

                    </div>

                    <div class="text-[#525560] text-xl space-x-3">
                        <i class="ri-facebook-circle-fill"></i>
                        <i class="ri-twitter-fill"></i>
                        <i class="ri-linkedin-box-fill"></i>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class=" pt-20">
        <form class="flex justify-center pb-10" action="">
            <div class="flex-col space-y-10">
                <div class="grid md:grid-cols-2   gap-5 ">
                    <div class="flex items-start flex-col">
                        <label class="font-medium text-sm text-[#525560]" for="f-name">First Name*</label>
                        <input class="border-0 border-b border-gray-400 w-[20rem] " type="text" placeholder="">
                    </div>
                    <div class="flex items-start flex-col">
                        <label class="font-medium text-sm text-[#525560]" for="f-name">Last Name*</label>
                        <input class="border-0 border-b border-gray-400 w-[20rem]" type="text" placeholder="">
                    </div>
                    <div class="flex items-start flex-col">
                        <label class="font-medium text-sm text-[#525560]" for="f-name">Email*</label>
                        <input class="border-0 border-b border-gray-400 w-[20rem]" type="text" placeholder="">
                    </div>
                    <div class="flex items-start flex-col">
                        <label class="font-medium text-sm text-[#525560]" for="f-name"> Subject*</label>
                        <input class="border-0 border-b border-gray-400 w-[20rem]" type="text" placeholder="">
                    </div>
                </div>

                <div class="flex items-start flex-col">
                    <label class="font-medium text-sm text-[#525560]" for="f-name"> Message*</label><br>
                    <textarea class="w-full" name="" id="" cols="30" rows="10" placeholder="message here"></textarea>
                </div>

                <div class=" flex justify-center ">
                    <button class="px-5 p-3 rounded-md text-white bg-[#70C174] font-medium">Send Message</button>
                </div>

            </div>
        </form>

        <iframe class="w-full"
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d903381.0725497208!2d84.20726963931568!3d27.81493196666411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sexpert!5e0!3m2!1sen!2snp!4v1724755746999!5m2!1sen!2snp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
