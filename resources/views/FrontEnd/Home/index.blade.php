@extends('layouts.FrontEnd.master')

@section('title', 'خانه')

@section('meta_description')
    <meta name="description" content="">
@endSection

@Section('style')
@endSection

@Section('content')
    <div class="banner-slider owl-carousel owl-theme">
        <div class="banner-item banner-bg-one">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-text">
                            <h1>A Choose & Safe Quality Transport Logistic</h1>
                            <p>Operations deal with the way the vehicles are operated, and the procedures set for this
                                purpose, including financing, legalities, and policies. In the transport industry,
                                operations and ownership of infrastructure can be either public.</p>
                            <div class="banner-btn">
                                <a class="default-btn" href="#">Get a Free Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-item banner-bg-two">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-text">
                            <h1>We Provide High-quality Transport Service</h1>
                            <p>Operations deal with the way the vehicles are operated, and the procedures set for this
                                purpose, including financing, legalities, and policies. In the transport industry,
                                operations and ownership of infrastructure can be either public.</p>
                            <div class="banner-btn">
                                <a class="default-btn" href="#">Get a Free Call</a>
                                <a class="default-btn popup-youtube" href="https://youtu.be/kpanwiv9fsw">Watch Video</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="feature-card">
                        <i class="icofont-fast-delivery"></i>
                        <span>87,357 KM</span>
                        <h3>Total Delivered</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="feature-card">
                        <i class="icofont-location-pin"></i>
                        <span>120</span>
                        <h3>Countries Delivered</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="feature-card">
                        <i class="icofont-users-alt-3"></i>
                        <span>3.2K</span>
                        <h3>Customers Served</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="feature-card">
                        <i class="icofont-thumbs-up"></i>
                        <span>27</span>
                        <h3>Years Experience</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about-section pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-duration="1s">
                    <div class="about-img">
                        <img alt="about image" src="{{asset('assets/img/about/1.jpg')}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>We Provide Fast & Safe Service to Our Customer</h2>
                        </div>
                        <ul id="myTab" class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a id="about-tab" aria-controls="about" aria-selected="true" class="nav-link active"
                                   data-bs-toggle="tab"
                                   href="#about" role="tab">About</a>
                            </li>
                            <li class="nav-item">
                                <a id="mission-tab" aria-controls="mission" aria-selected="false" class="nav-link"
                                   data-bs-toggle="tab"
                                   href="#mission" role="tab">Our Mission</a>
                            </li>
                            <li class="nav-item">
                                <a id="goal-tab" aria-controls="goal" aria-selected="false" class="nav-link"
                                   data-bs-toggle="tab"
                                   href="#goal" role="tab">Our Goal</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div id="about" aria-labelledby="about-tab" class="tab-pane fade show active"
                                 role="tabpanel">
                                <p>Found parents would couldn't said on. End is partiality which uniforms, the
                                    fundamental;
                                    All luxury. Dissolute small a heavy word small big been time small caught guest
                                    movement
                                    be will a are where at the front it is meet been sleep spineless, were finds pointed
                                    secure in a success.</p>
                                <p>Of pros, the but so, from ill to that good in the trying everyone. That, feedback
                                    there
                                    made he was may simple, it is yet a own blind you ago hand, were finds pointed
                                    secure in
                                    a success.
                                </p>
                            </div>
                            <div id="mission" aria-labelledby="mission-tab" class="tab-pane fade" role="tabpanel">
                                <p>Found parents would couldn't said on. End is partiality which uniforms, the
                                    fundamental;
                                    All luxury. Dissolute small a heavy word small big been time small caught guest
                                    movement
                                    be will a are where at the front its meet been sleep spineless, were finds pointed
                                    secure in a success.</p>
                                <p>Of pros the but so, from ill to that good in the trying everyone. That, feedback
                                    there
                                    made he was may simple, it is yet a own blind you ago hand, were finds pointed
                                    secure in
                                    a success.
                                </p>
                            </div>
                            <div id="goal" aria-labelledby="goal-tab" class="tab-pane fade" role="tabpanel">
                                <p>Found parents would couldn't said on. End is partiality which uniforms, the
                                    fundamental;
                                    All luxury. Dissolute small a heavy word small big been time small caught guest
                                    movement
                                    be will a are where at the front it is meet been sleep spineless, were finds pointed
                                    secure in a success.</p>
                                <p>Of pros the but so, from ill to that good in the trying everyone. That, feedback
                                    there
                                    made he was may simple, it is yet a own blind you ago hand, were finds pointed
                                    secure in
                                    a success.
                                </p>
                            </div>
                        </div>
                        <div class="theme-btn">
                            <a class="default-btn" href="about.html">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="transport-section pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Our Services</span>
                <h2>We Provide Products All over The World</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="transport-card">
                        <div class="transport-img">
                            <img alt="transport image" src="{{asset('assets/img/services/1.jpg')}}">
                        </div>
                        <div class="transport-text">
                            <i class="icofont-airplane-alt"></i>
                            <h3>Air Freight</h3>
                            <p>A cargo aircraft also known as freight aircraft, freighter, airlifter or cargo jet is a
                                fixed-wing aircraft that is designed.</p>
                            <div class="theme-btn">
                                <a class="default-btn" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="transport-card">
                        <div class="transport-img">
                            <img alt="transport image" src="{{asset('assets/img/services/2.jpg')}}">
                        </div>
                        <div class="transport-text">
                            <i class="icofont-truck-loaded"></i>
                            <h3>Road Freight</h3>
                            <p>A cargo aircraft also known as freight aircraft, freighter, airlifter or cargo jet is a
                                fixed-wing aircraft that is designed.</p>
                            <div class="theme-btn">
                                <a class="default-btn" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0 wow fadeInUp" data-wow-delay=".6s"
                     data-wow-duration="1s">
                    <div class="transport-card">
                        <div class="transport-img">
                            <img alt="transport image" src="{{asset('assets/img/services/3.jpg')}}">
                        </div>
                        <div class="transport-text">
                            <i class="icofont-sail-boat-alt-1"></i>
                            <h3>Ocean Freight</h3>
                            <p>A cargo aircraft also known as freight aircraft, freighter, airlifter or cargo jet is a
                                fixed-wing aircraft that is designed.</p>
                            <div class="theme-btn">
                                <a class="default-btn" href="ocean-freight.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="why-choose-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="why-choose-img">
                        <div class="shipping-text">
                            <h3>Know Shipping Location</h3>
                            <p>Track ID & Order ID will be on your document file.</p>
                            <form>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Track ID" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Order ID" type="text">
                                </div>
                                <button class="shipping-btn" type="submit">
                                    Track Now
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="why-choose-text">
                        <div class="section-title">
                            <h2>Why People Choose Fixa?</h2>
                            <p>A cargo aircraft also known as freight aircraft, freighter, airlifter or cargo jet is a
                                fixed-wing aircraft that is designed or converted for the carriage of cargo rather than
                                passengers.</p>
                        </div>
                        <div class="accordions">
                            <div class="accordion-item">
                                <div class="accordion-title" data-tab="item1">
                                    <i class="icofont-fast-delivery"></i>
                                    <h2>Fast & Safe Delivery <i class="icofont-stylish-right down-arrow"></i></h2>
                                </div>
                                <div id="item1" class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-title" data-tab="item2">
                                    <i class="icofont-ssl-security"></i>
                                    <h2>Product Security <i class="icofont-stylish-right down-arrow"></i></h2>
                                </div>
                                <div id="item2" class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-title" data-tab="item3">
                                    <i class="icofont-diamond"></i>
                                    <h2>Price Oriented <i class="icofont-stylish-right down-arrow"></i></h2>
                                </div>
                                <div id="item3" class="accordion-content">
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-title" data-tab="item4">
                                    <i class="icofont-ui-browser"></i>
                                    <h2>Secured Payment <i class="icofont-stylish-right down-arrow"></i></h2>
                                </div>
                                <div id="item4" class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-title" data-tab="item5">
                                    <i class="icofont-live-support"></i>
                                    <h2>24/7 Support <i class="icofont-stylish-right down-arrow"></i></h2>
                                </div>
                                <div id="item5" class="accordion-content">
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-title" data-tab="item6">
                                    <i class="icofont-like"></i>
                                    <h2>Well Experienced <i class="icofont-stylish-right down-arrow"></i></h2>
                                </div>
                                <div id="item6" class="accordion-content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="get-quote-section quote-bg pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="quote-text">
                        <div class="offer-text">
                            <span>15% OFF</span>
                            <p>First Order</p>
                        </div>
                        <h2>We Welcome Our New Customer With Great Offer</h2>
                        <p>Sides the rhetoric at together lane. Briefs its if when for fall the act been in heaven what
                            as
                            of sister her into ago, much the everything how and during into facility with have with
                            covered.</p>
                        <div class="theme-btn">
                            <a class="default-btn" href="#">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow bounceInUp" data-wow-duration="1s">
                    <div class="quote-form">
                        <h2>Get Free Quote</h2>
                        <form>
                            <div class="form-check form-check-inline">
                                <input id="inlineRadio1" class="form-check-input" name="inlineRadioOptions" type="radio"
                                       value="option1">
                                <label class="form-check-label" for="inlineRadio1">Road Freight</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input id="inlineRadio2" class="form-check-input" name="inlineRadioOptions" type="radio"
                                       value="option2">
                                <label class="form-check-label" for="inlineRadio2">Air Freight</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input id="inlineRadio3" class="form-check-input" name="inlineRadioOptions" type="radio"
                                       value="option3">
                                <label class="form-check-label" for="inlineRadio3">Ocean Freight</label>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12 pr-0">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Length cm" required type="number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 pr-0">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Height cm" required type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12 pr-0">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Weight kg" required type="number">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 pr-0">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Your Email" required type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12 pr-0">
                                    <div class="select-item">
                                        <i class="icofont-rounded-down"></i>
                                        <select class="form-control">
                                            <option selected>Country From</option>
                                            <option>Mexico</option>
                                            <option>Cameroon</option>
                                            <option>Slovenia</option>
                                            <option>Cameroon</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 pr-0">
                                    <div class="select-item">
                                        <i class="icofont-rounded-down"></i>
                                        <select class="form-control">
                                            <option selected> Country To</option>
                                            <option>Armenia</option>
                                            <option>Austria</option>
                                            <option>Cambodia</option>
                                            <option>Malaysia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Submit Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>


    <section class="worker-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Workers</span>
                <h2>Our Valuable Workers</h2>
                <p>Found parents would couldn't said on. That, feedback there made he was may blind you simple, its yet
                    a
                    own blind you ago hand.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="worker-card">
                        <div class="worker-img">
                            <img alt="worker image" src="{{asset('assets/img/worker/1.jpg')}}">
                        </div>
                        <div class="worker-text">
                            <h3>John Doe</h3>
                            <p>Road Freight Collector</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">
                    <div class="worker-card">
                        <div class="worker-img">
                            <img alt="worker image" src="{{asset('assets/img/worker/2.jpg')}}">
                        </div>
                        <div class="worker-text">
                            <h3>Naimuk Waninolin</h3>
                            <p>Air Freight Collector</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                    <div class="worker-card">
                        <div class="worker-img">
                            <img alt="worker image" src="{{asset('assets/img/worker/3.jpg')}}">
                        </div>
                        <div class="worker-text">
                            <h3>Mark Tyson</h3>
                            <p>Ocean Freight Collector</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                    <div class="worker-card">
                        <div class="worker-img">
                            <img alt="worker image" src="{{asset('assets/img/worker/4.jpg')}}">
                        </div>
                        <div class="worker-text">
                            <h3>Jackson</h3>
                            <p>Road Freight Collector</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feedback-section feedback-bg pt-100">
        <div class="container">
            <div class="section-title text-center">
                <span>Feedbacks</span>
                <h2>Feedback From Our Clients</h2>
                <p>Found parents would couldn't said on. That, feedback there made he was may blind you simple, its yet
                    a
                    own blind you ago hand.</p>
            </div>
            <div class="feedback-slider owl-carousel owl-theme">
                <div class="feedback-items">
                    <i class="icofont-quote-right"></i>
                    <p>Thank you for all your help. Your service was exce
                        lent and very fast. Many thanks for you kind
                        efficient service. I have already and will be
                        continue to recommend your services.</p>
                    <img alt="client image" src="{{asset('assets/img/feedback/client-1.png')}}">
                    <h3>Joe Johnson</h3>
                    <span>Businessman</span>
                </div>
                <div class="feedback-items">
                    <i class="icofont-quote-right"></i>
                    <p>Thank you for all your help. Your service was exce
                        lent and very fast. Many thanks for you kind
                        efficient service. I have already and will be
                        continue to recommend your services.</p>
                    <img alt="client image" src="{{asset('assets/img/feedback/client-2.png')}}">
                    <h3>Mr. McMachman</h3>
                    <span>Businessman</span>
                </div>
                <div class="feedback-items">
                    <i class="icofont-quote-right"></i>
                    <p>Thank you for all your help. Your service was exce
                        lent and very fast. Many thanks for you kind
                        efficient service. I have already and will be
                        continue to recommend your services.</p>
                    <img alt="client image" src="{{asset('assets/img/feedback/client-3.png')}}">
                    <h3>John Doe</h3>
                    <span>Businessman</span>
                </div>
            </div>
        </div>
    </section>


    <div class="company-section">
        <div class="container">
            <div class="company-slider owl-carousel owl-theme">
                <div class="company-logo">
                    <a href="#"><img alt="logo" src="{{asset('assets/img/company/1.png')}}"></a>
                </div>
                <div class="company-logo">
                    <a href="#"><img alt="logo" src="{{asset('assets/img/company/2.png')}}"></a>
                </div>
                <div class="company-logo">
                    <a href="#"><img alt="logo" src="{{asset('assets/img/company/3.png')}}"></a>
                </div>
                <div class="company-logo">
                    <a href="#"><img alt="logo" src="{{asset('assets/img/company/4.png')}}"></a>
                </div>
                <div class="company-logo">
                    <a href="#"><img alt="logo" src="{{asset('assets/img/company/5.png')}}"></a>
                </div>
            </div>
        </div>
    </div>


    <section class="blog-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Latest News</span>
                <h2>News of Our Transportation</h2>
                <p>Found parents would couldn't said on. That, feedback there made he was may blind you simple, its yet
                    a
                    own blind you ago hand.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img alt="blog image" src="{{asset('assets/img/blog/1.png')}}">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h3>
                                <a href="blog-details.html">Liberalization of Transport & Logistics service</a>
                            </h3>
                            <ul>
                                <li>
                                    <i class="icofont-ui-calendar"></i>
                                    01 April, 2021
                                </li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text.</p>
                            <div class="blog-btn text-left">
                                <a href="#">
                                    <i class="icofont-rounded-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html"><img alt="blog image" src="{{asset('assets/img/blog/2.png')}}"></a>
                        </div>
                        <div class="blog-text">
                            <h3>
                                <a href="blog-details.html">New Vehicles in the Fleet – See Our New Scania Trucks</a>
                            </h3>
                            <ul>
                                <li>
                                    <i class="icofont-ui-calendar"></i>
                                    02 April, 2021
                                </li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text.</p>
                            <div class="blog-btn text-left">
                                <a href="#">
                                    <i class="icofont-rounded-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0 wow fadeInUp" data-wow-delay=".2s"
                     data-wow-duration="1s">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html"><img alt="blog image" src="{{asset('assets/img/blog/3.png')}}"></a>
                        </div>
                        <div class="blog-text">
                            <h3>
                                <a href="blog-details.html">Our Driver Confirm Lorry Repaired as soon as Possible</a>
                            </h3>
                            <ul>
                                <li>
                                    <i class="icofont-ui-calendar"></i>
                                    03 April, 2021
                                </li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text.</p>
                            <div class="blog-btn text-left">
                                <a href="#">
                                    <i class="icofont-rounded-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="newsletter-section">
        <div class="container">
            <div class="newsletter-area">
                <h2>Join Newsletter For Daily Update</h2>
                <div class="col-lg-6 p-0">
                    <form class="newsletter-form" data-bs-toggle="validator">
                        <input autocomplete="off" class="form-control" name="EMAIL" placeholder="Enter Your Email"
                               required
                               type="email">
                        <button class="default-btn electronics-btn" type="submit">
                            Subscribe Now
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
                <img alt="newsletter image" src="{{asset('assets/img/newsletter-img.png')}}">
            </div>
        </div>
    </div>

@endsection


@push('scripts')

    <script>

    </script>



@endpush
