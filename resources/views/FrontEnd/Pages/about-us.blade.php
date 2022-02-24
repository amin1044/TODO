@extends('layouts.FrontEnd.master')

@section('title', 'درباره ما')

@section('meta_description')
{{--    <meta name="description" content="{{$about->meta_description}}">--}}
@endsection

@section('content')

    <div class="page-title title-bg-1">
        <div class="container">
            <div class="title-text text-center">
                <h2>About Us</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="about-section about-style-two pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-img">
                        <img alt="about image" src="{{asset('assets/img/about/2.jpg')}}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>We Provide Fast & Safe Service to Our Customers</h2>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a aria-controls="about" aria-selected="true" class="nav-link active" data-bs-toggle="tab" href="#about"
                                   id="about-tab" role="tab">About</a>
                            </li>
                            <li class="nav-item">
                                <a aria-controls="mission" aria-selected="false" class="nav-link" data-bs-toggle="tab" href="#mission"
                                   id="mission-tab" role="tab">Our Mission</a>
                            </li>
                            <li class="nav-item">
                                <a aria-controls="goal" aria-selected="false" class="nav-link" data-bs-toggle="tab" href="#goal"
                                   id="goal-tab" role="tab">Our Goal</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div aria-labelledby="about-tab" class="tab-pane fade show active" id="about" role="tabpanel">
                                <p>Found parents would couldn't said on. End is partiality which uniforms, the fundamental;
                                    All luxury. Dissolute small a heavy word small big been time small caught guest movement
                                    be will a are where at the front its meet been sleep spineless, were finds pointed
                                    secure in a success.</p>
                                <p>Of pros the but so, from ill to that good in the trying everyone. That, feedback there
                                    made he was may simple, its yet a own blind you ago hand, were finds pointed secure in a
                                    success.
                                </p>
                            </div>
                            <div aria-labelledby="mission-tab" class="tab-pane fade" id="mission" role="tabpanel">
                                <p>Found parents would couldn't said on. End is partiality which uniforms, the fundamental;
                                    All luxury. Dissolute small a heavy word small big been time small caught guest movement
                                    be will a are where at the front its meet been sleep spineless, were finds pointed
                                    secure in a success.</p>
                                <p>Of pros the but so, from ill to that good in the trying everyone. That, feedback there
                                    made he was may simple, its yet a own blind you ago hand, were finds pointed secure in a
                                    success.
                                </p>
                            </div>
                            <div aria-labelledby="goal-tab" class="tab-pane fade" id="goal" role="tabpanel">
                                <p>Found parents would couldn't said on. End is partiality which uniforms, the fundamental;
                                    All luxury. Dissolute small a heavy word small big been time small caught guest movement
                                    be will a are where at the front its meet been sleep spineless, were finds pointed
                                    secure in a success.</p>
                                <p>Of pros the but so, from ill to that good in the trying everyone. That, feedback there
                                    made he was may simple, its yet a own blind you ago hand, were finds pointed secure in a
                                    success.
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


    <section class="why-choose-section choose-style-three">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="why-choose-img">
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
                                <div class="accordion-content" id="item1">
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
                                <div class="accordion-content" id="item2">
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
                                <div class="accordion-content" id="item3">
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
                                <div class="accordion-content" id="item4">
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
                                <div class="accordion-content" id="item5">
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
                                <div class="accordion-content" id="item6">
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


@endsection

@push('scripts')

@endpush
