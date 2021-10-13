@extends('guest.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="view">
            <img src="{{ asset('image/asset/1.png') }}" class="w-100">
            <div class="mask pattern-1 flex-center waves-effect waves-light back-color-overlay">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <span class="text-white" style="font-size:50px; font-weight:700">
                                    Stabilize your body
                                    <br />
                                    for a productive life
                                </span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <button type="button" class="btn btn-md back-color text-white rounded-pill animated bounce infinite" style="font-weight:700; font-size:20px;">
                                    Get Started
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <iframe width="570" height="321" src="https://www.youtube.com/embed/jfEB9l05Zbg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <span style="font-size:30px; font-weight:600" class="font-color">Body Gravity Method</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <span style="font-weight:500">
                        <span class="font-color">Body Gravity</span> is a new way of seeing & training the body, so that the body is pefectly connected
                        & produce maximum strength. The result is free from injury, pain, soreness, and of course increase physical abilities i a short time.
                    </span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <span style="font-weight:500">
                        <span class="font-color">Body Gravity</span> based on physic law in balancing the structure of the human body & returning it to the center
                        of Gravity naturally.
                    </span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <span style="font-weight:500">This method can consistently applied to daily activities, so that the body is trained to remain stable & change the posture to a more ideal
                        body. This method can also be applied whe doing other sports such a Pilates, yoga, gym, golf, etc.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="back-color pt-4 pb-4 mt-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <span style="font-size:30px; font-weight:600" class="text-white">Why Body Gravity</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <span style="font-weight:500" class="text-white">Body Gravity is proven to be effective in restoring body posture, for more than 10 years experience with clients in Indonesia and many other countries.</span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <span class="badge font-color rounded-pill bg-white btn-block pt-2 pb-2" style="font-size:25px;">
                            Stronger
                        </span>
                    </div>
                    <div class="col-lg-6">
                        <span class="badge font-color bg-white rounded-pill btn-block pt-2 pb-2" style="font-size:25px;">
                            No Pain
                        </span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-6">
                        <span class="badge font-color bg-white rounded-pill btn-block pt-2 pb-2" style="font-size:25px;">
                            More Agile
                        </span>
                    </div>
                    <div class="col-lg-6">
                        <span class="badge font-color bg-white rounded-pill btn-block pt-2 pb-2" style="font-size:25px;">
                            Better Posture
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-12">
                    <img src="{{ asset('image/asset/why.png') }}" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-12">
            <span style="font-size:30px; font-weight:600" class="font-color">Our Program</span>
        </div>
    </div>
    <div class="row mt-3">
        @for($i = 1; $i < 5; $i++)
            <div class="col-lg-6 mb-4">
                <div class="card rounded-0">
                    <div class="card-body rounded-0 p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="{{ asset('image/asset/body_shaping.jpg') }}" class="w-100">
                            </div>
                        </div>
                        <div class="row pl-4 pr-4 mt-2">
                            <div class="col-lg-12">
                                <span style="font-size:30; font-weight:600" class="font-color">Body Shaping</span>
                            </div>
                        </div>
                        <div class="row pl-4 pr-4 mt-2">
                            <div class="col-lg-12">
                                <span>From IDR <span style="font-weight:600" class="font-color">6 Mill</span> per 10X visits</span>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-block back-color text-white rounded-0 d-flex align-items-center justify-content-end">
                                    Book Now
                                    <i class="fas fa-chevron-right ml-3"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
<div class="back-color pt-5 pb-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <img src="{{ asset('image/asset/andry.png') }}" style="width:200px; height:200px;" class="rounded-circle">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span class="text-white" style="font-size:25px; font-weight:600">Andry</span>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span class="text-white" style="font-weight:500">Founder</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span class="text-center text-white">Hi, I'm the founder of Body Gravity. Body Gravity is founded because i see out there that there is no exercise to restore body posture, especially in scoliosis...
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12 d-flex justify-content-end">
                        <small class="text-white">Read More...</small>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="button" class="btn btn-md z-depth-0 p-0">
                            <i class="fab fa-instagram text-white" style="font-size:25px" onclick="window.open('');"></i>
                        </button>
                        <button type="button" class="btn btn-md z-depth-0 p-0">
                            <i class="fab fa-youtube text-white" style="font-size:25px;" onclick="window.open('https://www.youtube.com/watch?v=rejpVQNoqh4');"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <img src="{{ asset('image/asset/karen.png') }}" style="width:200px; height:200px;" class="rounded-circle">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span class="text-white" style="font-size:25px; font-weight:600">Karen</span>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span class="text-white" style="font-weight:500">Coach</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span class="text-center text-white">Hi, since childhood i have had scoliosis with 60 degree inclination. I have tried many ways to cure it, but none of the result are satisfactory</span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12 d-flex justify-content-end">
                        <small class="text-white">Read More...</small>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="button" class="btn btn-md z-depth-0 p-0">
                            <i class="fab fa-instagram text-white" style="font-size:25px" onclick="window.open('https://www.instagram.com/zheng.health/')"></i>
                        </button>
                        <button type="button" class="btn btn-md z-depth-0 p-0">
                            <i class="fab fa-youtube text-white" style="font-size:25px;" onclick="window.open('https://www.youtube.com/watch?v=ul8_tpzIozA&feature=youtu.be');"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <img src="{{ asset('image/asset/imelda.png') }}" style="width:200px; height:200px;" class="rounded-circle">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span class="text-white" style="font-size:25px; font-weight:600">Imelda</span>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span class="text-white" style="font-weight:500">Coach</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <span class="text-center text-white">I used to have back pain. But everything changed after meeting Body Gravity, the pain in my shoulder was getting better, even now it's 100% gone ...</span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12 d-flex justify-content-end">
                        <small class="text-white">Read More...</small>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="button" class="btn btn-md z-depth-0 p-0">
                            <i class="fab fa-instagram text-white" style="font-size:25px" onclick="window.open('https://instagram.com/health.imelda/');"></i>
                        </button>
                        <button type="button" class="btn btn-md z-depth-0 p-0">
                            <i class="fab fa-youtube text-white" style="font-size:25px;" onclick="window.open('https://www.youtube.com/watch?v=gBIvqdNqF9U');"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-12 d-flex justify-content-center">
            <span style="font-size:30px; font-weight:600" class="font-color">What they say about Body Gravity</span>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/mh08muD47qU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
        </div>
    </div>
    <div class="row" style="margin-top:100px;">
        <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.95620456836!2d106.7892512!3d-6.2321853!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd89db032bc5e2221!2sApartemen%20Simpruk%20Teras!5e0!3m2!1sid!2sid!4v1633944112335!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <span style="font-size:30px; font-weight:700" class="font-color">Our Information</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-size:20px; font-weight:500" class="font-color">LOCATION</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-weight:500">SIMPRUK TERAS APARTEMENT</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-weight:500">Jl. Teuku Nyak Arief</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-weight:500">Jakarta Selatan 12220</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-weight:500; font-size:20px;" class="font-color">CONTACT US</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-weight:500"><i class="fas fa-phone"></i> : +62 811 8772283</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-weight:500"><i class="fas fa-envelope"></i> : admin@body-gravity.com</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-weight:500"><i class="fas fa-envelope"></i> : bodygravityid@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-weight:500; font-size:20px;" class="font-color">
                                OPENING HOURS
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-weight:500">Monday - Friday 06:00 - 20:00</span>
                            <span style="font-weight:500">Saturday - Sunday 06:00 - 12:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection