@extends('layouts.FrontEnd.master')

@section('title', 'سوالات متداول')

@section('meta_description')
    <meta name="description" content="داده">
@endsection

@section('content')


    <div class="page-title title-bg-8">
        <div class="container">
            <div class="title-text text-center">
                <h2>FAQ</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>FAQ</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="faq-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>FAQ</span>
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="accordions">
                        <div class="accordion-item">
                            <div class="accordion-title" data-tab="item1">
                                <h2>How To Order Product?<i class="icofont-stylish-right down-arrow"></i></h2>
                            </div>
                            <div class="accordion-content" id="item1">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                    commodo.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title" data-tab="item2">
                                <h2>Where I Can Get Brochures?<i class="icofont-stylish-right down-arrow"></i></h2>
                            </div>
                            <div class="accordion-content" id="item2">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                    commodo.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title" data-tab="item3">
                                <h2>How Much Time Take To Deliver Product?<i class="icofont-stylish-right down-arrow"></i>
                                </h2>
                            </div>
                            <div class="accordion-content" id="item3">
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                    commodo.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title" data-tab="item4">
                                <h2>Is It Secure For Online Payment?<i class="icofont-stylish-right down-arrow"></i></h2>
                            </div>
                            <div class="accordion-content" id="item4">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                    commodo.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title" data-tab="item5">
                                <h2>Should I Payment First?<i class="icofont-stylish-right down-arrow"></i></h2>
                            </div>
                            <div class="accordion-content" id="item5">
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-title" data-tab="item6">
                                <h2>How Can I Order Online?<i class="icofont-stylish-right down-arrow"></i></h2>
                            </div>
                            <div class="accordion-content" id="item6">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-section pt-100 pb-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>Ask Any Question</h2>
                <p>Found parents would couldn't said on. That, feedback there made he was may blind you simple, its yet a
                    own blind you ago hand.</p>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-img">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-area">
                        <form id="contactForm">
                            <h2>Lets Talk!</h2>
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" data-error="Please enter your name" id="name" name="name" placeholder="Your Name"
                                               required type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" data-error="Please enter your email" id="email" name="email" placeholder="Your Email"
                                               required type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" data-error="Please enter your number" id="number" name="number" placeholder="Phone Number"
                                               required type="number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-6">
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
                                <div class="col-lg-12 col-md-12">
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
