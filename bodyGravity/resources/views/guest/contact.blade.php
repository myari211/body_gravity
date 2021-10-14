@extends('guest.layouts.app')
@section('content')
    <div class="d-none d-lg-block">
        <div class="container">
            <div class="row" style="margin-top:100px;">
                <div class="col-lg-12 d-flex justify-content-center">
                    <span style="font-size:30px; font-weight:500" class="font-color">Contact Us</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.95620456836!2d106.7892512!3d-6.2321853!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd89db032bc5e2221!2sApartemen%20Simpruk%20Teras!5e0!3m2!1sid!2sid!4v1633944112335!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-lg-6">
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="md-form md-outline mb-0">
                                    <label for="first_name">Name</label>
                                    <input type="text" class="form-control rounded-0" name="first_name" id="first_name" style="height:40px;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="md-form md-outline">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control rounded-0" style="height:40px;" name="phone" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="md-form md-outline mt-0">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control rounded-0" style="height:40px;" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="md-form mt-0 md-outline rounded-0">
                                    <textarea id="form7" class="md-textarea form-control rounded-0" rows="5"></textarea>
                                    <label for="form7">Message</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-md back-color rounded-0 text-white mr-0">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="d-block d-lg-none">
        <div class="container">
            <div class="row" style="margin-top:70px;">
                <div class="col-12 d-flex justify-content-center">
                    <span style="font-size:20px; font-weight:700" class="font-color">Contact Us</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="md-form input-with-pre-icon">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                        <i class="fas fa-user input-prefix"></i>  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="md-form input-with-pre-icon">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                        <i class="fas fa-envelope input-prefix"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="md-form input-with-pre-icon">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" class="form-control" id="phone">
                        <i class="fas fa-phone input-prefix"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="md-form mt-0 md-outline rounded-0">
                        <textarea id="form7" class="md-textarea form-control rounded-0" rows="5"></textarea>
                        <label for="form7">Message</label>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-md rounded-0 back-color text-white">
                        Send Message
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection