@extends('website.english.parent')

@section('title','Organizations')

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
                <a class="nav-link dropdown-toggle active"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Training
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item text-start" href="{{ route('website.individuals') }}">Individuals</a></li>
                  <li><a class="dropdown-item text-start active" href="{{ route('website.organizations') }}">Organizations</a></li>
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


        <div class="banner-organizations">
            <div class="container d-flex align-items-center ">
                <p>MicroSmart, Palestinian Corporate with Global Vision</p>
            </div>
        </div>


        <section class="organiz-organizations">
            <h3 class="text-center">Organizations</h3>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="text-organizations">
                            <p>MicroSmart offers the Custom Fit Workforce Development program (CFWDP) which aims to provide flexible and specialized training programs designed to enhance the efficiency of the organization's employees and retain them as a force that works to achieve the organization's goals, and to enhance the organization's ability to compete and bypass traditional capabilities to move towards smarter, fitter, and proactive capabilities in excelling, complying with goals, and investing the opportunities</p>
                            <p>MicroSmart pursues a strategy of a comprehensive analysis of all components of the system and the strategic objectives of the organization and works on analyzing the workforce, identifying potentials, comparing the available strength with the strategic aspirations of the organization, and presenting an integrated plan that includes the gap and recommendations which leads to bridge the gap and offer ways to attract creative minds to achieve aspirations</p>
                            <p>MicroSmart adheres to the firm belief that organizations that invest in the development of the workforce certainly achieve their goals at a specific time, but it basically represents an essential factor in attracting creative minds and investing in potential opportunities in the long term</p>

                        </div>
                    </div>
                    <div class="col-12  col-lg-5">
                        <div class="img-organizations">
                            <img src="{{ asset('website/images/20230510145745__fpdl.in__3d-seo-optimization_165488-5895-removebg-preview.png') }}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection

        @section('scripts')

        @endsection
