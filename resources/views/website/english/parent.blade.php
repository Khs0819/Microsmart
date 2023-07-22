<!DOCTYPE html>
<html lang="ar" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('website/images/tap.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Climate+Crisis&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">


    <title>MicroSmart | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="../Css/style.css"> -->
    <link rel="stylesheet" href="{{ asset('website/Css/styleEng.css') }}">
    <link rel="stylesheet" href="{{ asset('website/Css/ResponsiveEng.css') }}">
    <!-- <link rel="stylesheet" href="../Css/Responsive.css"> -->
    @yield('styles')
</head>

<body>

    <div class="load" id="loadd">
        <div class="logoh"></div>
    </div>
    <div class="logo-content" id="logo-content">
        <a id="arr" href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <header>
            <div class="container">
                <div class="logo">
                    <a href="{{ route('website.homeEng') }}">
                        <img src="{{ asset('website/images/mm.svg') }}" alt="MicroSmart Logo">
                    </a>
                </div>
                <div class="hours">
                    <i class="fa-solid fa-user-clock my-2"></i>
                    <div class="headerText mx-1">
                        <h3>work hours</h3>
                        <p>Saturday - Thursday 8 am - 6 pm</p>
                    </div>
                </div>



                <div class="mail">
                    <a href="{{ route('website.contact') }}">
                        <i class="fa-solid fa-envelope"></i>
                    </a>

                </div>

                <div class="dropdown">
                    <a class=" langg dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Language (En)
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('website.homeArabic') }}">AR</a></li>
                    </ul>
                </div>
            </div>
        </header>

        @yield('content')


        <footer>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="logo">
                            <a href="{{ route('website.homeEng') }}">
                                <img src="{{ asset('website/images/mm.svg') }}" alt="">
                            </a>

                        </div>
                        <p>We see the details accurately and carefully, we are creative in brainstorming and provoking
                            ideas, we are professional in achieving goals, our goals are inseparable from the goals of
                            our customers, we are partners in excellence</p>

                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-square-instagram"></i>
                        <div class="privUse">
                            <p>Terms <a href="{{ route('website.privacy') }}">privacy </a> & <a
                                    href="{{ route('website.use') }}">the use</a></p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="nnav">
                            <a href="{{ route('website.homeEng') }}">Home</a>
                            <a href="{{ route('website.microsmart') }}">MicroSmart</a>
                            <a href="{{ route('website.Strategy') }}">Strategy</a>
                            <a href="{{ route('website.individuals') }}">Training</a>
                            <a href="{{ route('website.ProgrammingWebsites') }}">Information Technology</a>
                            <a href="{{ route('website.businessSolutions') }}">Business Solutions</a>
                            <a href="mailto:microsmart@gmail.com">Connect us</a>
                        </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="full">
                            <div class="k d-flex justify-content-center my-3">
                                <i class="fa-solid fa-user-clock mx-2"></i>
                                <p>Saturday - Thursday 8 am - 6 pm</p>
                            </div>
                            <div class="k d-flex justify-content-center my-3">
                                <i class="fa-solid fa-location-dot mx-2"></i>
                                <p>Gaza - Omar Al-Mukhtar Street - opposite Gaza Municipality Park - Gardens Building -
                                    Sixth Floor.</p>

                            </div>
                            <div class="k d-flex justify-content-center my-3">
                                <i class="fa-solid fa-phone mx-2"></i>
                                <p>+972597364417</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                        <p>E-mail</p>
                        <input type="email" placeholder="@gmail.com">
                        <input type="submit" value="Register">
                    </div>
                </div>
            </div>
    </div>
    <div class="ff">
        <div class="container d-flex align-items-center justify-content-center">
            <p>Copyright © 2023 <a href="{{ route('button_users') }}">MicroSmart</a> </p>
        </div>
    </div>
    </footer>

    </div>

    <script src="{{ asset('website/Js/nain.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>

</html>
