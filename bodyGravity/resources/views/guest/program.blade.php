@extends('guest.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="view">
            <img src="{{ asset('image/asset/why.png') }}" style="width:100%">
            <div class="mask pattern-1 flex-center waves-effect waves-light">
                <span class="text-white text-center" style="font-weight:700; font-size:40px;">PROGRAM FOR PUBLIC<br />
                <span class="text-white" style="font-weight:600; font-size:30px;">Get a better body posture by joining now.</span></span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card rounded-0 p-0 z-depth-0 border">
                <div class="card-body pt-0 pb-0 pl-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('image/asset/body_shaping.jpg') }}" style="width:100%">
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span style="font-size:30px; font-weight:600" class="font-color">Body Shaping</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <span>
                                            This program is targeted for people who want an ideal body shape ratio in the arms or thighs, remove fat folds
                                            on the back because of bras, shape the buttocks (from flat to round), slim the waist, or remove double chin.
                                        </span>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                        <span style="font-size:20px; font-weight:600" class="font-color">From IDR 6 Mio<span style="font-size:10px;"> per 10x visits</span></span>
                                        <button type="button" class="btn btn-md rounded-pill back-color text-white">
                                            Book Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card rounded-0 z-depth-0 border">
                <div class="card-body pt-0 pb-0 pr-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <span style="font-size:30px; font-weight:600" class="font-color">Rehabilitation</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <span>
                                        This program is targeted for people who need physical rehabilitation so they can restore their body function
                                        because of knee injury, hip joint injury, ankle injury, shoulder injury, spinal cord injury, pinched nerve, neck
                                        pain, waist, back or stiff shoulder.
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size:20px; font-weight:600;" class="font-color">from IDR 6 Mio <span style="font-size:10px;">per 10x Visit</span></span>
                                    <button type="button" class="btn btn-md back-color text-white rounded-pill">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('image/asset/rehab.jpg') }}" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card rounded-0 z-depth-0 rounded-0 border">
                <div class="card-body pl-0 pt-0 pb-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <span style="font-size:30px; font-weight:600" class="font-color">
                                <img src="{{ asset('image/asset/children.jpg') }}" class="w-100">
                            </span>
                        </div>
                        <div class="col-lg-6">
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <span style="font-size:30px; font-weight:600" class="font-color">
                                        Children
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <span>
                                        This program is targerted to building kid's habit since early age to have
                                        good posture as we see nowadays many kids age 8 years old alreadyhave back issues
                                        due to repeatable bad had habbits.
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size:20px; font-weight:600;" class="font-color">From IDR 5 Mio<span style="font-size:10px;"> per 10x Visit</span></span>
                                    <button type="button" class="btn btn-md z-depth-0 rounded-pill back-color text-white">Book Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card rounded-0 z-depth-0 border">
                <div class="card-body pt-0 pb-0 pr-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span style="font-size:30px; font-weight:600" class="font-color">Senior</span>
                                    </div>
                                </div>
                                <div class='row mt-4'>
                                    <div class="col-lg-12">
                                        <span>This program is targeted for senior aged people who need rehaibilitation so they can restore theid body function 
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                    <span style="font-weight:600" class="font-color">from IDR 7 Mio<span style="font-size:10px;"> per 10x visit</span></span>
                                    <button type="button" class="btn btn-md z-depth-0 rounded-pill back-color text-white">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('image/asset/senior.jpg') }}" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-12">
        <div class="view">
            <img src="{{ asset('image/asset/1.png') }}" class="w-100">
            <div class="mask pattern-1 flex-center waves-effect waves-light">
                <span class="text-white text-center" style="font-size:40px; font-weight:700">
                    PROGRAM FOR COACH<br />
                    <span style="font-size:30px;">Want to learn about Body Gravity ? Come join our training.</span>
                </span>
            </div>
        </div>
    </div>
</div>
<div class='container'>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card z-depth-0 rounded-0 border">
                <div class="card-body pt-0 pb-0 pl-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('image/asset/advance1.jpg') }}" class="w-100">
                        </div>
                        <div class="col-lg-6">
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <span style="font-size:30px; font-weight:600" class="font-color">Basic Program</span>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <span>A training program for those of you who work in the world of sports, where we will teach you about Body Gravity at the Basic Level</span>
                                </div>
                            </div>
                            <div class="row" style="margin-top:160px;">
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <a class="font-color" style="font-weight:500">More Information . . .</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card z-depth-0 border rounded-0">
                <div class="card-body pt-0 pb-0 pr-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <span style="font-size:30px; font-weight:600" class="font-color">Intermediate Program</span>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <span>
                                        A training program for those of you who work in the world of sports, where we will teach
                                        you about Body Gravity at the intermediate Level.
                                    </span>
                                </div>
                            </div>
                            <div class="row" style="margin-top:155px;">
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <a class="font-color" style="font-weight:500">More Information . . .</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('image/asset/intermediate.jpg') }}" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card z-depth-0 border rounded-0">
                <div class="card-body pt-0 pb-0 pl-0 d-flex align-items-end flex-column">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('image/asset/advance.jpg') }}" class="w-100">
                        </div>
                        <div class="col-lg-6">
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <span style="font-size:30px; font-weight:600;" class="font-color">Advance Program</span>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    <span>
                                        A training program for those of you who work in the world of sports, where we will teach you
                                        about Body Gravity at the Advance Level.
                                    </span>
                                </div>
                            </div>
                            <div class="row" style="margin-top:130px;">
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <a class="font-color" style="font-weight:500">More Information . . .</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection