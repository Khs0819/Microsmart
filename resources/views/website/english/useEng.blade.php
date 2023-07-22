@extends('website.english.parent')

@section('title','Terms of Use')

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
                <a class="nav-link active" href="{{ route('website.homeEng') }}">Home</a>
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

        <div class="banner-PhoneApplications">
            <div class="container d-flex align-items-center ">
                <p>MicroSmart, Nonstop Motion, and Endless Motivation</p>
            </div>
        </div>


        <div class="use">
            <div class="container">
                <h1>Terms of Use</h1>
               <h3 class="my-4 mmyyyy">Date: May - 2023</h3>
        <ol>
          <li>
            <h3>1-	Acceptance of the Terms of Use:</h3>
            <p>The services provided by MicroSmart to its customers are subject to the terms of use described below: </p>
            <ul>
                <li>MicroSmart has the right to update, modify and change any of the terms of use at any time.</li>
                <li>MicroSmart may voluntarily notify any of the modifications or changes through its website only.</li>
                <li>Customers agree that they have the capacity and authority to accept the terms and abide by the obligations described in the Terms of Use.</li>


            </ul>
          </li>
          <li>
            <h3>2-	Description of services:</h3>

            <ul>
                <li>Through its website, MicroSmart provides its customers with clear content of training programs targeting individuals and organizations, various information technology services, specialized services for business companies and organizations, and marketing activities.</li>
                <li>-	Also, the website may include advertisements and additional information about the company's activities, or the activities of the company's partners.</li>

            </ul>
          </li>
          <li>
           <h3>3-	Limitations of use:</h3>
            <ul>
                <li>No party of individuals, companies, and organizations is allowed to copy, send, distribute, publish, sell, or reproduce any derivative works from the information, programs, and services that feature or belong to MicroSmart unless there are notices or agreements that prove such allowance.</li>
                <li>The operation, availability, and access to the website may be completely or partially interrupted for reasons related to the Internet or networks.</li>
                <li>It is the responsibility of users not to violate the privacy and integrity of MicroSmart networks and systems and not to bypass legal access to these networks and systems.</li>

            </ul>
          </li>
          <li>
            <h3>4-	Accessibility:</h3>
            <ul>
                <li>Customers can access the website of MicroSmart and carefully read what MicroSmart offers either services or products in clear detail.</li>
                <li>Customers shall be of legal age and legally eligible to use the MicroSmart services according to the description and details of the services.</li>
                <li>Customers can register to request training courses or send a request through "Contact Us" to request another service via MicroSmart’s website. </li>
                <li>Absolutely and categorically, MicroSmart does not, through its website or through its social media sites, ask its customers to disclose any financial information.</li>
            </ul>
          </li>
          <li>
        </ol>


            </div>
        </div>

        @endsection

        @section('scripts')

        @endsection
