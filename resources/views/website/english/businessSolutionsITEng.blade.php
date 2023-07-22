@extends('website.english.parent')

@section('title','IT Business Solutions')

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
                <a class="nav-link" href="{{ route('website.Strategy') }}">Strategy</a>
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
                <a class="nav-link dropdown-toggle active" href="#"  data-bs-toggle="dropdown"
                    data-bs-auto-close="outside">Information Technology</a>
                <ul class="dropdown-menu">
                    <li class="dropend">
                        <a href="#" class="dropdown-item text-start dropdown-toggle active" data-bs-toggle="dropdown">Digital Transformation</a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item text-start active" href="{{ route('website.businessSolutionsIT') }}">IT Business Solutions</a></li>
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


        <div class="banner-businessSolutionsIT">
            <div class="container d-flex align-items-center ">
                <p>With Passion, Making Success for Our Customers is Our Distinction</p>
            </div>
        </div>


        <section class="businessSolutions-businessSolutionsIT">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="text-businessSolutionsIT">
                            <h3>IT Business Solutions</h3>
                            <p>The difference between business organizations in their structure, operations, and the way they run their business requires a thorough understanding of the distinct needs of organizations, which requires a professional team with accumulated experience in providing business solutions in the field of information technology. </p>
                            <p>We believe in the rule of exception when providing our services to solve business challenges. We consider every organization distinguished by the exceptionalism that gives us excellence in innovation that starts from an accurate understanding of customer needs. We raise all considerations in the present to anticipate the future to give our customers the tools of superiority.</p>
                            <p>The business world is becoming more technology-transformed, non-stop development, the need to be in harmony with development is growing and becoming a necessity.</p>

                        </div>

                    </div>
                    <div class="col-12  col-lg-5">
                        <div class="img-businessSolutionsIT">
                            <img src="{{ asset('website/images/20230511121850__fpdl.in__online-marketing-financial-report-chart-data-analysis-web-development-concept-tablet-with-data-chart-3d-vector-illustration_145666-1529_large-removebg-preview.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="Advantages-businessSolutionsIT">
            <h3 class="text-center">We give you advanced advantages</h3>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/classroom.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>Easy settings</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/self-service.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>Accurate timetable</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/design-thinking.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>Continuity in technical support and development</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/self-service.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>Adhering to the standards of competitive advantage adopted by MicroSmart</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                 <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/system-integration.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>accuracy in performance</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/self-service.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>quality of outputs that meet customer expectations and satisfaction</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                 <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/system-integration.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>competitive cost</p>

                            </div>
                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="Ad-Advantages d-flex align-items-center justify-content-center">
                            <div class="contant-Ad d-flex align-items-center justify-content-between">
                                <div class="img-Ad d-flex align-items-center justify-content-center">
                                <img src="{{ asset('website/images/self-service.png') }}" alt="">

                            </div>
                            <div class="text-Ad">
                                <p>granting customers the option of innovation</p>

                            </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </section>


        <div class="bann-businessSolutionsIT"></div>

        <section class="businessSolutions2-businessSolutionsIT">
            <div class="container text-center">

                        <div class="common_text">
                            <p>We realize that the MicroSmart IT team is a unique and distinct element in achieving the vision and mission of our corporate, therefore we are keen to provide an inspiring and motivating work environment to unleash their innovation and develop their professional capabilities.
                                The IT team is able to maintain our distinction and achieve customer satisfaction and confidence in our services through continuous effort and commitment
                                </p>
                                <a href="mailto:microsmart@gmail.com">Contact Us</a>
                            </div>

                    </div>



        </section>

        @endsection

        @section('scripts')

        @endsection
