@extends('website.english.parent')

@section('title','Motion Graphics')

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
                        <a href="#" class="dropdown-item text-start dropdown-toggle" data-bs-toggle="dropdown">Digital Transformation</a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item text-start" href="{{ route('website.businessSolutionsIT') }}">IT Business Solutions</a></li>
                            <li><a class="dropdown-item text-start" href="{{ route('website.ProgrammingWebsites') }}">Website Designing and Programming</a></li>
                            <li><a class="dropdown-item text-start" href="{{ route('website.PhoneApplications') }}">Smartphone Applications</a></li>
                        </ul>
                    </li>
                    <li class="dropend">
                        <a href="#" class="dropdown-item text-start dropdown-toggle active" data-bs-toggle="dropdown">Designing</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-start" href="{{ route('website.graphicDesign') }}">Innovative graphic design</a></li>
                            <li><a class="dropdown-item text-start active" href="{{ route('website.MotionGraphic') }}">Motion Graphics</a></li>
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

        <div class="banner-MotionGraphic">
            <div class="container d-flex align-items-center ">
                <p>With Passion, Making Success for Our Customers is Our Distinction</p>
            </div>
        </div>


        <section class="Motion-MotionGraphic">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="text-Motion">
                            <h3>Motion Graphics</h3>
                            <p>Animation, and adding depth to the story along with interactive music. Creating short films. Creating marketing content to promote goods and services requires professionals who are good at using advanced tools in design, drawing, animation, programming, and special effects.</p>
                            <p>We are skilled in motion graphic design, and we have the tools that allow our customers to advertise goods and services fluently and clearly in the finest, most attractive, and easiest ways.</p>
                        </div>

                    </div>
                    <div class="col-12  col-lg-5">
                        <div class="img-Motion">
                            <img src="{{ asset('website/images/20230511150052__fpdl.in__web-development-concept-3d-illustration-icon-composition-with-website-layout-development-content_9209-8454_large-removebg-preview.png') }}" alt="">

                        </div>
                    </div>
                </div>
            </div>

        </section>


        <div class="bann-MotionGraphic"></div>


        <section class="Motion2-MotionGraphic">
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
