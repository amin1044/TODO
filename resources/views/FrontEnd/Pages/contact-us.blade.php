@extends('layouts.FrontEnd.master')

@section('title', 'تماس ما')

@section('meta_description')

@endsection

@section('content')


    <div class="page-title title-bg-7">
        <div class="container">
            <div class="title-text text-center">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        Contact Us
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="contact-card-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-card">
                        <i class="icofont-phone"></i>
                        <a href="tel:+1012345678">+1012345678</a>
                        <a href="tel:+1087643210">+1087643210</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-card">
                        <i class="icofont-ui-message"></i>
                        <a href="/cdn-cgi/l/email-protection#d8b0bdb4b4b798beb1a0b9f6bbb7b5"><span class="__cf_email__"
                                                                                                   data-cfemail="4129242d2d2e01272839206f222e2c">[email&#160;protected]</span></a>
                        <a href="/cdn-cgi/l/email-protection#4b2824253f2a283f0b2d22332a65282426"><span class="__cf_email__"
                                                                                                       data-cfemail="8fece0e1fbeeecfbcfe9e6f7eea1ece0e2">[email&#160;protected]</span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-lg-0 offset-sm-3">
                    <div class="contact-card">
                        <i class="icofont-location-pin"></i>
                        <ul>
                            <li>28/A, New York, USA</li>
                            <li>32/D, New York, USA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-section contact-style-two pb-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>Ask Any Question</h2>
                <p>Found parents would couldn't said on. That, feedback there made he was may blind you simple, its yet a
                    own blind you ago hand.</p>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact-area">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" data-error="Please enter your name" id="name" name="name" placeholder="Your Name"
                                               required type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" data-error="Please enter your email" id="email" name="email" placeholder="Your Email"
                                               required type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" data-error="Please enter your number" id="number" name="number" placeholder="Phone Number"
                                               required type="number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" data-error="Please enter your subject" id="subject" name="subject" placeholder="Your Subject"
                                               required type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                    <textarea class="message-field" cols="30" data-error="Please type your message" id="message" name="message"
                                              placeholder="Write Message" required
                                              rows="5"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 text-center">
                                    <button class="default-btn contact-btn" type="submit">
                                        Send Message
                                    </button>
                                    <div class="h3 alert-text text-center hidden" id="msgSubmit"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')


@endpush
