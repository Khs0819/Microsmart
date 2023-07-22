@extends('website.english.parent')

@section('title','Business solutions')

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
                    <a class="nav-link active" href="{{ route('website.businessSolutions') }}">
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




        <div class="banner-businessSolutions">
            <div class="container d-flex align-items-center ">
                <p>MicroSmart, Nonstop Motion, and Endless Motivation</p>
            </div>
        </div>


        <section class="Solutions-businessSolutions">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-7">
                        <div class="text-Solutions">
                            <h3>Business Solutions</h3>
                            <p>In the rapidly changing and evolving business environments and the need for business organizations to explore opportunities that need continuous harmonization of the organization's capabilities and calculated readiness to avoid risks and challenges, the need for an entrepreneurial mind that can understand the complex variables of business has become an urgent necessity</p>
                            <p>In providing business solution services, the strategy of MicroSmart is based on an integrated understanding of all dimensions and variables of the organization and developing a practical plan that contributes to achieving the goals of the organization.</p>
                            <p>MicroSmart is based on providing business solution services to organizations in the areas of strategic management, organization, and human resources on a variety of practical experiences through veteran business consultants in the fields of entrepreneurship, and academic experts with specialized knowledge in the fields of management</p>

                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-5">
                        <div class="img-Solutions">
                            <img src="{{ asset('website/images/20230510145423__fpdl.in__flat-isometric-concept-illustration-digital-marketing-target-network_18660-2110-removebg-preview.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="BusinessSolutions-Services">
            <div class="container">
                <h3>MicroSmart offers a combination of business solution services</h3>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="card-BusinessSolutions">
                            <div class="BusinessSolutions-contant">
                             <div class="BusinessSolutions-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <div class="text-BusinessSolutions-Services">
                            <p>1.Specialized Workforce Development Program</p>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="card-BusinessSolutions">
                            <div class="BusinessSolutions-contant">
                             <div class="BusinessSolutions-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <div class="text-BusinessSolutions-Services ">
                            <p>2.IT solutions</p>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="card-BusinessSolutions">
                            <div class="BusinessSolutions-contant">
                             <div class="BusinessSolutions-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <div class="text-BusinessSolutions-Services">
                            <p>3.Surveys and studies for markets, consumers, and products</p>
                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="card-BusinessSolutions">
                            <div class="BusinessSolutions-contant">
                             <div class="BusinessSolutions-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <div class="text-BusinessSolutions-Services">
                            <p>4.Business consulting</p>
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
