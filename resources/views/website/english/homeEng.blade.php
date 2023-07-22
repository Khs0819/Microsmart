@extends('website.english.parent')

@section('title','Home')

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
                    <a class="nav-link" href="{{ route('website.contact') }}">
                        Contact Us
                    </a>
                  </li>
        </ul>
    </div>
</nav>

        <div class="banner-home">
            <div class="slideshow-container" onmouseover="show()" onmouseout="hide()">
                  <div class="mySlides fade img1">
                        <div class="container d-flex align-items-center">
                            <div class="Home-text text-container">
                                <h1>MicroSmart</h1>
                                <p>MicroSmart, Palestinian Corporate with Global Vision</p>
                            <a class="main" href="{{ route('website.microsmart') }}">MicroSmart</a>
                            <a href="{{ route('website.contact') }}">Contact Us</a>
                            </div>


                        </div>

                  </div>
                  <div class="mySlides fade img2">
                    <div class="container d-flex align-items-center">
                        <div class="Home-text text-container">
                            <h1>The Strategy</h1>
                            <p>MicroSmart, The Connection Between Talent and Innovation</p>
                        <a class="main" href="{{ route('website.Strategy') }}">The Strategy</a>
                        <a href="{{ route('website.contact') }}">Contact Us</a>
                        </div>


                    </div>

              </div>
              <div class="mySlides fade img3">
                <div class="container d-flex align-items-center">
                    <div class="Home-text text-container">
                        <h1>Information Technology</h1>
                        <p>MicroSmart, Nonstop Motion, and Endless Motivation</p>
                    <a class="main" href="{{ route('website.ProgrammingWebsites') }}">Information Technology</a>
                    <a href="{{ route('website.contact') }}">Contact Us</a>
                    </div>


                </div>

          </div>
              </div>
              <div style="text-align:center" class="slider-dots">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            </div>


            <section class="elements">
                <div class="container">
                    <div class="contant">
                        <div class="row1">
                            <div class="car car1">
                                <div class="element-icon">
                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                </div>
                                <div class="element-text">
                                    <h4>Where We Work</h4>
                                    <p>The main office of MicroSmart is located in Palestine - Gaza, where it launched its programs. MicroSmart works to provide its services in different work environments all over the world through many means consistent with the nature of the services.</p>
                                </div>
                            </div>
                            <div class="car car2">
                                <div class="element-icon">
                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                </div>
                                <div class="element-text">
                                    <h4>Our customers</h4>
                                    <p>MicroSmart provides its services on several different levels: individuals, organizations, markets, goods, and communities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row2">
                            <div class="car car3">
                                <div class="element-icon">
                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                </div>
                                <div class="element-text">
                                    <h4>Standards of Competitive Advantage</h4>
                                            <p>MicroSmart adheres to the four Standards of competitive advantage, accuracy in performance, quality of output that meets customer expectations and satisfaction, competitive cost, and granting customers the option of innovation.</p>
                                </div>

                            </div>
                            <div class="car car4">
                                <div class="element-icon">
                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                </div>
                                <div class="element-text">
                                    <h4>Social Responsibility</h4>
                                     <p>Microsmart adopts policies that care about the interests of society and the best interests of all our customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        </section>

            <section class="serv">
                <div class="container d-flex align-items-center justify-content-center">
                    <div class="row d-flex  align-items-center">
                        <div class="col-5">
                            <div class="serv-text mx-4">
                                <h4>Our Services</h4>
                                <p>We do everything in partnership with our customers. We discuss, listen, understand ideas, and search for options in order to rise in achieving the competitive advantage that gives us the distinction of customer superiority</p>

                            </div>

                        </div>
                        <div class="col-12 col-sm-7 col-md-7 col-lg-7">
                            <div class="serv-img">
                                <div class="row">
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 ">
                                        <div class="c">
                                            <div class="serv-img1">
                                                <a href="{{ route('website.digitalTransformation-serv') }}">
                                                    <img src="{{ asset('website/images/progrmmer.jpg') }}" alt="">
                                                </a>

                                            </div>
                                        <h5>Digital Transformation</h5>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 ">
                                        <div class="c">
                                            <div class="serv-img2">
                                                <a href="{{ route('website.design-serv') }}">
                                                    <img src="{{ asset('website/images/web.jpg') }}" alt="">
                                                </a>
                                            </div>
                                        <h5>Designing</h5>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="c">
                                            <div class="serv-img3">
                                                <a href="{{ route('website.networks-serv') }}">
                                                    <img src="{{ asset('website/images/apps.jpg') }}" alt="">
                                                </a>
                                            </div>
                                        <h5>Networks</h5>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="c">
                                            <div class="serv-img4">
                                                <a href="{{ route('website.personnelTraining-serv') }}">
                                                    <img src="{{ asset('website/images/design.jpg') }}" alt="">
                                                </a>
                                            </div>
                                        <h5>Individual Training</h5>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="c">
                                            <div class="serv-img5">
                                                <a href="{{ route('website.OrganizationTraining-serv') }}">
                                                    <img src="{{ asset('website/images/mograpic.jpg') }}" alt="">
                                                </a>
                                            </div>
                                        <h5>Training for organizations</h5>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                        <div class="c">
                                            <div class="serv-img6">
                                                <a href="{{ route('website.businessSolutions-serv') }}">
                                                    <img src="{{ asset('website/images/Consulting.jpg') }}" alt="">
                                                </a>
                                            </div>
                                        <h5>Business solutions</h5>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="competitor">
                <div class="container d-flex align-items-center justify-content-center">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 col-lg-7">
                            <div class="competitor-text">
                                <h5>Are you competent?</h5>
                                <p>We, the MicroSmart team, strive with firm determination toward excellence in everything we do. We believe that our human resources are the real force that leads to excellence, and we appreciate that everyone on our team has something that distinguishes her or him.
                                    There are no borders stand between what we do in order to work with passion to make a real difference in customer expectations, the continuous development of the capabilities of the team, and the creation of a conducive work environment full of challenges and rewards that encourages creativity, innovation, personal growth, and diversity.
                                    By joining MicroSmart, you become a member of a supportive family, committed to flexibility and work-life balance to ensure the well-being and safety of our human resources.
                                    We strive to do whatever it takes to combine talent with innovation
                                    </p>

                                <p class="myTop">Join our human resources</p>
                                <a href="mailto:info@microsmart.net">Contact Us</a>

                            </div>
                        </div>
                        <div class="col-12  col-lg-5 ">
                            <div class="competitor-img">
                                <img src="{{ asset('website/images/20230508011910_[fpdl.in]_young-caucasian-man-sitting-chair-bag-working-computer-remote-working-home-office-self-isolation-concept-flat-style_285336-1203.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="card-page">
                <h4 class="text-center">MicroSmart Core Values </h4>
            <div class="page-c">
            <div class="card1">
            <div class="card-na">
                <div class="na-img">
                    <i class="fa fa-solid fa-user-tie"></i>
                </div>
            </div>
            <div class="card-co">
                <h1>Integrity</h1>
                <p>Act with honesty, openness, and impartiality, adhering to the corporate’s strong ethical principles and values</p>
            </div>

            </div>

            <div class="card1">
                <div class="card-na">
                    <div class="na-img">
                        <i class="fa fa-solid fa-user-tie"></i>
                    </div>
                </div>
                <div class="card-co">
                    <h1>Accountability</h1>
                    <p>We work to fulfill the obligations and duties that lie upon us by being reliable and responsible and ensuring delivery on time with high quality</p>
                </div>

                </div>

                <div class="card1">
                    <div class="card-na">
                        <div class="na-img">
                            <i class="fa fa-solid fa-user-tie"></i>
                        </div>
                    </div>
                    <div class="card-co">
                        <h1>Transparency</h1>
                        <p>MicroSmart seeks to strengthen the relationship with all stakeholders of MicroSmart’s operations and projects, so MicroSmart is keen to make its businesses an open book containing clear pages of credibility, belonging, and trust</p>
                    </div>

                    </div>

                    <div class="card1">
                        <div class="card-na">
                            <div class="na-img">
                                <i class="fa fa-solid fa-user-tie"></i>
                            </div>
                        </div>
                        <div class="card-co">
                            <h1>Integrity</h1>
                            <p>Act with honesty, openness, and impartiality, adhering to the corporate’s strong ethical principles and values</p>
                        </div>

                        </div>

                        <div class="card1">
                            <div class="card-na">
                                <div class="na-img">
                                    <i class="fa fa-solid fa-user-tie"></i>
                                </div>
                            </div>
                            <div class="card-co">
                                <h1>Growth and Synergy</h1>
                                <p>Continuous perseverance for development and learning is the most important pillar that supports professional and personal progress, we value and develop the talents, initiatives, and diversity of our employees, and we support the collective effort and cooperation that leads to the best results</p>
                            </div>

                            </div>

                            <div class="card1">
                                <div class="card-na">
                                    <div class="na-img">
                                        <i class="fa fa-solid fa-user-tie"></i>
                                    </div>
                                </div>
                                <div class="card-co">
                                    <h1>Passion</h1>
                                    <p>We work to combine the ability to achieve with the desire to achieve the best results and we look at the challenge with excitement and interest</p>
                                </div>

                                </div>
            </div>
            </section>


            <section class="CompanyAddress">
                <div class="container d-flex align-items-center justify-content-center">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                            <div class="CompanyAddress-text">
                                <h4>Company Address</h4>
                                <p>Gaza - Omar Al-Mukhtar Street - opposite Gaza Municipality Park - Gardens Building - Sixth Floor.</p>
                                <a href="mailto:microsmart@gmail.com">Contact Us</a>


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
