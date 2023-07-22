<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('website/images/tap.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">


    <title>MicroSmart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="../Css/style.css"> -->
    <!-- <link rel="stylesheet" href="../Css/styleEng.css"> -->
    <link rel="stylesheet" href="{{ asset('website/Css/ResponsiveEng.css') }}">
    <!-- <link rel="stylesheet" href="../Css/Responsive.css"> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{ asset('website/Css/contactEng.css') }}">
</head>

    <body>
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
                          <a href="html/contact.html">
                               <i class="fa-solid fa-envelope"></i>
                          </a>

                         </div>

                 <div class="dropdown">
                  <a class=" langg dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Language (En)
                  </a>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('website.contactAR') }}">AR</a></li>
                  </ul>
                </div>
              </div>
      </header>

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


      <div class="container ff">

        <form id="contactForm" class="col-lg-6">
          <h1>Contact Us</h1>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstName">First Name<span style="color: red;">*</span></label>
              <input type="text" class="form-control" id="firstName" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Last Name<span style="color: red;">*</span></label>
              <input type="text" class="form-control" id="lastName" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">E-mail<span style="color: red;">*</span></label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group col-md-6">
              <label for="phone">Phone Number</label>
              <input type="tel" class="form-control" id="phone">
            </div>
          </div>
          <div class="form-group">
            <label for="subject">Subject<span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="subject" required>
          </div>
          <div class="form-group">
            <label for="message">Message Text<span style="color: red;">*</span></label>
            <textarea class="form-control" id="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="b">Send</button>
        </form>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script>


  $(document).ready(function() {
  $('#contactForm').submit(function(event) {
    event.preventDefault();
    // التحقق من صحة الإدخالات هنا

    // رسالة الإعلام
    Swal.fire({
      title: 'Good job!',
      text:   'Dear applicant, thank you for your trust, we will study the request and respond as soon as possible',
      icon: 'success',
      showCancelButton: false,
      confirmButtonText: 'OK',
    }).then((result) => {
      // إرسال النموذج بعد النقر على OK
      if (result.isConfirmed) {
        $('#contactForm')[0].submit();
      }
    });
  });
});

</script>









    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('website/Js/nain.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
