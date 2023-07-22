@extends('website.english.parent')

@section('title','A Glance')

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
                <a class="nav-link active" href="{{ route('website.microsmart') }}">MicroSmart</a>
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


        <div class="banner-microsmart">
            <div class="container d-flex align-items-center ">
                <p>MicroSmart, The Connection Between Talent and Innovation</p>
            </div>
        </div>


        <section class="introductory-microsmart">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="text-introductory">
                            <h3>A Glance</h3>
                            <p>MicroSmart was established in Feb-2019, to provide specialized services in the areas of competency-based training for individuals, professionalized capacity building for organizations, information technology, and business solutions with the principle of customer superiority in the field of entrepreneurship and businesses. </p>

                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                        <div class="img-introductory">
                            <img src="{{ asset('website/images/Resume-bro.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div class="Administration-microsmart">
            <h3 class="text-center topp">The Administration</h3>
            <div class="container">
                <div class="row align-items-center my-5">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="text-Administration">
                            <h3>Board of Directors</h3>
                            <p>Many responsibilities and duties lie on the shoulder of BoD in the formulation of strategic plans and courses of action for the different Programs, and BoD takes part in cooperation with Executive Management to set SOPs, principles, values, and the code of conduct</p>

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="img-Administration">
                            <img src="{{ asset('website/images/Connected world-cuate.png') }}" alt="">
                        </div>
                    </div>


                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="img2-Administration">
                                <img src="{{ asset('website/images/Pitch meeting-bro.png') }}" alt="">
                            </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="text2-Administration text-center">
                            <h3>Advisory Board</h3>
                            <p>A group of experts, who are characterized by professionalism and experience in several fields, provide advice, guidance, and knowledge to the BoD.</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="text3-Administration text-center">
                            <h3>Executive Management </h3>
                            <p>The functions of the executive management are undertaken by the Program Managers of MicroSmart. Its main tasks are to implement the strategic vision and mission entrusted to the programs at the administrative and operational levels based on competencies, values, principles, and a positive work environment conducive to achieving the aspirations</p>
                        </div>
                    </div>

            </div>


        </div>
    </div>

    <section class="CompanyAddress">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="CompanyAddress-text">
                        <h4>Company Address</h4>
                        <p>Gaza - Omar Al-Mukhtar Street - opposite Gaza Municipality Park - Gardens Building - Sixth Floor.</p>

                        <a href="mailto:info@microsmart.net">Connect us</a>

                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 r">
                    <div class="CompanyAddress-img">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d715.066519576467!2d34.45408062822397!3d31.511832114145264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1685817752148!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @endsection

    @section('scripts')

    @endsection
