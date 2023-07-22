@extends('website.english.parent')

@section('title','The Strategy')

@section('styles')

@endsection

@section('content')

<nav id="nav" class="navbar navbar-expand-lg d-flex justify-content-center">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
        aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-stream navbar-toggler-icon"></i>
    </button>

    <div class="collapse navbar-collapse " id="main-nav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link " href="{{ route('website.homeEng') }}">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('website.microsmart') }}">MicroSmart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('website.Strategy') }}">Strategy</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Training
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item text-start" href="{{ route('website.individuals') }}">Individuals</a></li>
                  <li><a class="dropdown-item text-start" href="{{ route('website.organizations') }}">Organizations</a></li>
                 </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"  data-bs-toggle="dropdown"
                    data-bs-auto-close="outside">Information Technology</a>
                <ul class="dropdown-menu">
                    <li class="dropend">
                        <a href="#" class="dropdown-item text-start dropdown-toggle" data-bs-toggle="dropdown">Digital Transformation</a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item text-start" href="{{ route('website.businessSolutionsIT') }}">IT Business Solutions</a></li>
                            <li><a class="dropdown-item text-start" href="{{ route('website.ProgrammingWebsites') }}">Website Designing and Programming</a></li>
                            <li><a class="dropdown-item text-start" href="{{ route('website.PhoneApplications') }}">Smartphone Applications</a></li>
                        </ul>
                    </li>
                    <li class="dropend">
                        <a href="#" class="dropdown-item text-start dropdown-toggle" data-bs-toggle="dropdown">Designing</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-start" href="{{ route('website.graphicDesign') }}">Innovative graphic design</a></li>
                            <li><a class="dropdown-item text-start" href="{{ route('website.MotionGraphic') }}">Motion Graphics</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item text-start" href="{{ route('website.networks') }}">Networks</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.businessSolutions') }}">
                        Business Solutions
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">
                        Contact Us
                    </a>
                  </li>
        </ul>
    </div>
</nav>


        <div class="banner-Strategy">
            <div class="container d-flex align-items-center ">
                <p>With Passion, Making Success for Our Customers is Our Distinction</p>
            </div>
        </div>


        <section class="Vision-Strategy">
            <h3 class="text-center toptext">The Strategy</h3>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="text-Vision">
                            <h3 >The Vision</h3>
                            <p>By 2027, MicroSmart is the first competitor, and the most reliable one, in providing services that exceed the expectations of its customers in the areas of training, business solutions , and information technology solutions for business organizations</p>

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="img-Vision">
                            <img src="{{ asset('website/images/20230509155129__fpdl.in__dart-arrow-violet-hit-center-target-customer-cartoon-pastel-minimal-style-you-can-used-attraction-campaign-accurate-promo-print-ad-business-finance-ux-ui-3d-vector-illust.png') }}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="message-Strategy">
            <div class="container">
                <div class="row d-flex align-items-center">

                    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="img-message">
                            <img src="{{ asset('website/images/20230509160036__fpdl.in__3d-paper-plane-mail-icon-send-new-message-minimal-email-sent-letter-social-media-online-marketing-subscribe-newsletter-3d-plane-flight-icon-vector-rendering-illustration_.png') }}" alt="">

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="text-message">
                            <h3 >The Mission</h3>
                            <p>MicroSmart is moving towards achieving a competitive advantage in providing its services in the Area of training according to the methodology of competency-based training and achieving the best interest of its customers by diversifying the training services</p>
                            <p> MicroSmart works to provide organizations with the advantage of exclusivity in the field of information technology based on the principle of customer superiority and provides business services that give organizations smarter, fitter, and proactive capabilities in excelling, complying with goals, and investing opportunities</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="Objectives-Strategy">
            <h3 class="text-center">The Goals</h3>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Object-Objectives d-flex align-items-center justify-content-center">
                            <div class="contant-Object d-flex align-items-center justify-content-between">
                                <div class="img-Object d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/classroom.png') }}" alt="">

                            </div>
                            <div class="text-Object mx-4">
                                <p>Designing specialized training systems for individuals, and capacity building for business organizations, according to the principles of individualized customer needs, quality, and the best interest of MicroSmart customers</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Object-Objectives d-flex align-items-center justify-content-center">
                            <div class="contant-Object d-flex align-items-center justify-content-between">
                                <div class="img-Object d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/self-service.png') }}" alt="">

                            </div>
                            <div class="text-Object mx-4">
                                <p>Providing information technology services to business organizations with the principle of customer superiority</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Object-Objectives d-flex align-items-center justify-content-center">
                            <div class="contant-Object d-flex align-items-center justify-content-between">
                                <div class="img-Object d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/design-thinking.png') }}" alt="">

                            </div>
                            <div class="text-Object mx-4">
                                <p>Providing business solution services to organizations in the Field of strategic management, organization, and human resources</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Object-Objectives d-flex align-items-center justify-content-center">
                            <div class="contant-Object d-flex align-items-center justify-content-between">
                                 <div class="img-Object d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/system-integration.png') }}" alt="">

                            </div>
                            <div class="text-Object mx-4">
                                <p>Providing innovative technical solutions of information technology in the fields of education, management, marketing, advertising, and applied products to serve people and society</p>

                            </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </section>
        @endsection

        @section('scripts')

        @endsection
