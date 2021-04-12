@extends('front.layouts.app')

@section('content')
    <!-- start hero section -->
    <section class="p-0 parallax home-events-conference" data-parallax-background-ratio="0.5"
        style="background-image: url('{{asset('front-assets/assets/images/jciimage.jpg')}}');">
        <div class="opacity-extra-medium-2 bg-dark-purple-2"></div>
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-9 col-lg-10 col-md-11 d-flex flex-column justify-content-center full-screen text-center padding-2-half-rem-lr md-landscape-h-600px xs-padding-15px-lr">
                    <div
                        class="bg-transparent-dark-purple-2 border-radius-6px padding-6-half-rem-all lg-padding-5-rem-all md-padding-4-half-rem-all sm-padding-2-rem-lr">
                        <p
                            class="alt-font font-weight-500 text-uppercase letter-spacing-3px text-neon-orange margin-40px-bottom sm-w-100 sm-margin-25px-bottom" style="font-size:30px;">
                            The Biggest annual event</p>
                        <h1
                            class="alt-font font-weight-600 letter-spacing-minus-3px text-white margin-3-half-rem-bottom sm-margin-20px-bottom xs-letter-spacing-minus-1-half">
                            JCI conference event</h1>
                        <div
                            class="d-flex flex-column flex-sm-row justify-content-center border-tb border-color-white-transparent text-center padding-15px-tb margin-4-rem-bottom">
                            <div class="margin-25px-right xs-no-margin-right sm-margin-15px-right">
                                <i class="feather icon-feather-calendar text-white margin-10px-right"></i>
                                <span
                                    class="text-medium text-white alt-font font-weight-500 text-uppercase d-inline-block">20
                                    july 2020, wednesday</span>
                            </div>
                            <div>
                                <i class="feather icon-feather-map-pin text-white margin-10px-right"></i>
                                <span
                                    class="text-medium text-white alt-font font-weight-500 text-uppercase d-inline-block">Broadway,
                                    new york, 10013</span>
                            </div>
                        </div>
                        <a class="btn btn-register registrationBtn  px-5 py-3 col-md-12 mt-4 "
                            data-toggle="modal" data-target="#exampleModal">
                            Registration
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog  ">
                                <div class="modal-content bg-dark-purple-2">
                                    <div class="modal-header">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 text-center margin-four-bottom">
                                                <h6 class="alt-font text-white font-weight-500">Registration</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <section class=" bg-dark-purple-2 wow animate__fadeIn">
                                            <div class="row justify-content-center">
                                                <div class="col-12 col-lg-12 col-md-10">
                                                    <div class="panel-group accordion-event accordion-style-05"
                                                        id="accordion5" data-active-icon="fa-angle-down"
                                                        data-inactive-icon="fa-angle-right">
                                                        <!-- start accordion item -->
                                                        <div class="panel">
                                                            <div
                                                                class="panel-heading border-color-white-transparent">
                                                                <a class="accordion-toggle" data-toggle="collapse"
                                                                    data-parent="#accordion5"
                                                                    href="#accordion-style-05-01">
                                                                    <div class="panel-title">
                                                                        <span
                                                                            class="alt-font text-white d-inline-block registrationHeading">Single Registration</span>
                                                                        <i
                                                                            class="indicator fas fa-angle-down text-white icon-extra-small"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div id="accordion-style-05-01"
                                                                class="panel-collapse collapse show"
                                                                data-parent="#accordion5">
                                                                <div
                                                                    class="panel-body text-light-white-transparent registrationDescription">
                                                                    Register for single person.</div>
                                                                    <a href="single-registration.php"><button type="button"
                                                                        class="btn navBtn mb-2 ">Register</button></a>
                                                            </div>
                                                        </div>
                                                        <!-- end accordion item -->
                                                        <!-- start accordion item -->
                                                        <div class="panel">
                                                            <div class="panel-heading border-color-white-transparent">
                                                                <a class="accordion-toggle" data-toggle="collapse"
                                                                    data-parent="#accordion5"
                                                                    href="#accordion-style-05-02">
                                                                    <div class="panel-title">
                                                                        <span
                                                                            class="alt-font text-white d-inline-block registrationHeading">Multiple
                                                                            Registration</span>
                                                                        <i
                                                                            class="indicator fas fa-angle-right text-white icon-extra-small"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div id="accordion-style-05-02"
                                                                class="panel-collapse collapse"
                                                                data-parent="#accordion5">
                                                                <div
                                                                    class="panel-body text-light-white-transparent registrationDescription">
                                                                    Registration for multiple person.</div>
                                                                <a href="multiple-registration.php"><button type="button"
                                                                    class="btn navBtn mb-2">Register</button></a>

                                                            </div>
                                                        </div>
                                                        <!-- end accordion item -->

                                                    </div>
                                                </div>
                                            </div>

                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button"
                                        class="btn navBtn" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal End-->
                    </div>
                </div>
            </div>
        </div>



    </section>
    <!-- end hero section -->

    <!-- start section -->
    <section id="reading" class="p-0 wow animate__fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xl-6 col-lg-5 cover-background md-h-550px sm-h-400px xs-h-300px wow animate__fadeIn"
                    style="background-image: url('{{asset('front-assets/assets/images/jciimage.jpg')}}');">
                </div>
                <div class="col-12 col-xl-6 col-lg-7 padding-9-half-rem-tb padding-10-half-rem-lr bg-dark-purple-2 xl-padding-5-rem-all md-padding-7-rem-all xs-padding-3-rem-lr wow animate__fadeIn"
                    data-wow-delay="0.3s">
                    <span
                        class="alt-font font-weight-500 text-medium text-neon-orange text-uppercase letter-spacing-1px d-block margin-30px-bottom xs-margin-20px-bottom">Don't
                        miss this amazing conference</span>
                    <h4
                        class="alt-font font-weight-500 text-white margin-5-half-rem-bottom lg-margin-4-half-rem-bottom letter-spacing-minus-1px w-90 xl-w-100 xs-margin-3-half-rem-bottom">
                        Don’t miss out on the fun and join the business community!</h4>
                    <div class="panel-group accordion-event accordion-style-05" id="accordion1"
                        data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
                        <!-- start accordion item -->
                        <div class="panel">
                            <div class="panel-heading border-color-white-transparent active-accordion">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                    href="#collapseOne">
                                    <div class="panel-title">
                                        <span class="alt-font text-white d-inline-block">What do you mean by item and
                                            end product?</span>
                                        <i class="indicator fas fa-angle-down text-white icon-extra-small"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show" data-parent="#accordion1">
                                <div class="panel-body text-very-light-white-transparent">Lorem ipsum is simply dummy
                                    text of the printing and typesetting industry ipsum has been the industry's standard
                                    dummy text ever when.</div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="panel">
                            <div class="panel-heading border-color-white-transparent">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                    href="#collapseTwo">
                                    <div class="panel-title">
                                        <span class="alt-font text-white d-inline-block">What are some examples of
                                            products?</span>
                                        <i class="indicator fas fa-angle-right text-white icon-extra-small"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" data-parent="#accordion1">
                                <div class="panel-body text-very-light-white-transparent">Lorem ipsum is simply dummy
                                    text of the printing and typesetting industry ipsum has been the industry's standard
                                    dummy text ever when.</div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="panel">
                            <div class="panel-heading border-color-white-transparent">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                    href="#collapseThree">
                                    <div class="panel-title">
                                        <span class="alt-font text-white d-inline-block">Am i allowed to modify that i
                                            purchased?</span>
                                        <i class="indicator fas fa-angle-right text-white icon-extra-small"></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" data-parent="#accordion1">
                                <div class="panel-body text-very-light-white-transparent">Lorem ipsum is simply dummy
                                    text of the printing and typesetting industry ipsum has been the industry's standard
                                    dummy text ever when.</div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start section -->
    <section
        class="padding-100px-tb fix-background md-padding-75px-tb sm-padding-50px-tb sm-overflow-visible wow animate__fadeIn"
        style="background-image:url('assets/images/jciimage.jpg');">
        <div class="opacity-full bg-dark-purple-2"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center text-lg-left md-margin-30px-bottom">
                    <h6 class="alt-font font-weight-500 text-white mb-0">Don't miss this amazing big events conference
                        and opportunities!</h6>
                </div>
                <div class="col-12 col-xl-5 offset-xl-2 offset-lg-1 col-lg-5 col-sm-9">
                    <div class="newsletter-email position-relative w-100">
                        <form action="email-templates/subscribe-newsletter.php" method="post">
                            <input class="large-input border-radius-4px m-0 border-0 required" type="email" name="email"
                                placeholder="Enter your email address">
                            <input type="hidden" name="redirect" value="">
                            <button type="button" class="btn registrationBtn px-5 py-3 col-md-12 mt-4 "
                                data-toggle="modal" data-target="#exampleModal">
                                Subscribe
                            </button>
                            <div class="form-results border-radius-4px position-absolute d-none"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@endsection)
