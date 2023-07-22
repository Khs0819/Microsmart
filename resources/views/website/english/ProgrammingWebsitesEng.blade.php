@extends('website.english.parent')

@section('title','Website Designing and Programming')

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
                            <li><a class="dropdown-item text-start" href="{{ route('website.businessSolutionsIT') }}">IT Business Solutions</a></li>
                            <li><a class="dropdown-item text-start active" href="{{ route('website.ProgrammingWebsites') }}">Website Designing and Programming</a></li>
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

        <div class="banner-ProgrammingWebsites">
            <div class="container d-flex align-items-center ">
                <p>MicroSmart, The Connection Between Talent and Innovation</p>
            </div>
        </div>


        <section class="Websites-ProgrammingWebsites">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="text-Websites">
                            <h3>Website Designing and Programming</h3>
                            <p>Business organizations communicate continuously with their customers and the external environment at the global level through the website to achieve their various goals, which enables organizations to perform their functions easily and flexibly. </p>
                            <p>Attracting customers through access and exchange of information, offering unique features of the website of high quality to users, continuous improvement of user experience, improving access to content, controlling access to information, raising the level of security, and protecting customer privacy is a field of specialization for the MicroSmart team.</p>
                            <p>The technical features available to MicroSmart, which can be granted to your website to make it attractive and enjoyable, are based on the knowledge and technology assets that MicroSmart works to constantly develop.</p>
                        </div>

                    </div>
                    <div class="col-12  col-lg-5">
                        <div class="img-Websites">
                            <img src="{{ asset('website/images/20230511130640__fpdl.in__content-management-system-cartoon-style-vector-concept-illustration_92926-1622_large-removebg-preview.png') }}" alt="">


                        </div>
                    </div>
                </div>
            </div>

        </section>


        <div class="bann-ProgrammingWebsites"></div>


        <section class="Websites2-ProgrammingWebsites">
            <div class="container text-center">
                        <div class="common_text ">

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
