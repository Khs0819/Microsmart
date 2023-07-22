<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('website/images/tap.png') }}">
    <title>MicroSmart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        @font-face {
            font-family: "micro-bold";
            src: url("{{ asset('website/fonts/din-next-lt-w23-bold.ttf') }}");
        }

        @font-face {
            font-family: "micro-regular";
            src: url("{{ asset('website/fonts/din-next-lt-w23-regular.ttf') }}");
        }

        body {
            background-color: #EEEEEE;
        }

        .alert {
            height: 100vh;
            width: 100%;
        }

        .container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .row {
            background-color: white;
            width: 1000px;
            height: 320px;
            color: black;
            box-shadow: 0px 13px 48px 3px rgba(42, 42, 42, 0.507);
        }

        .content h2 {
            font-family: 'micro-bold';
            font-size: 34px;
            margin-top: 40px;
            text-align: center;
            margin-bottom: 20px;
        }

        .content p {
            font-family: 'micro-regular';
            padding-right: 10px;
        }

        .content a {
            font-family: 'micro-regular';
            padding: 10px 16px;
            text-decoration: none;
            background-color: #09189e;
            color: white;
            border-radius: 6px;
            margin-right: 10px;
        }

        .foott img {
            height: 120px;
            width: 120px;
        }

        .foott {
            background-color: #09189e;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100%;
            width: 103%;
        }

        .foott p {
            font-family: 'micro-regular';
            color: white;
            text-align: center;
        }

        @media (min-width: 769px) and (max-width: 991.80px) {
            .foott {
                width: 105%;
            }

            .content h2 {
                font-size: 30px;
            }

            .content p {
                font-size: 16px;
            }
        }

        @media (min-width: 575.80px) and (max-width: 769px) {
            .foott {
                width: 106%;
            }

            .row {
                height: 350px;
            }

            .content h2 {
                font-size: 28px;
            }

            .content p {
                font-size: 15px;
            }

            .foott img {
                height: 110px;
                width: 110px;
            }
        }

        @media screen and (max-width: 575.80px) {
            .foott {
                display: none;
            }

            .content {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                text-align: center;
            }

            .content h2 {
                font-size: 27px;
            }

            .content p {
                font-size: 15px;
                padding: 0;
                text-align: center;
                width: 247.2px;
            }

            .foott img {
                height: 110px;
                width: 110px;
            }

            .bt {
                width: 247.2px;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .content a {
                margin: 0;
                padding: 3% 10%;


            }
        }
    </style>
</head>

<body>

    <div class="alert">
        <div class="container">
            <div class="row animate__animated animate__pulse">
                <div class="col-12 col-sm-6">
                    <div class="content">
                        <h2>تم الإرسال بنجاح</h2>
                        <p>عزيزي مقدم الطلب، شكراً لك على ثقتك، سنقوم بدراسة الطلب والرد بأسرع وقت ممكن.</p>
                        <p><span style="color: red ; font-size: 110%;font-weight: 	700;">تنويه:</span> يمكنك تعديل
                            الطلب من خلال تعبئة طلب
                            جديد، ويتم الغاء
                            الطلب القديم
                            تلقائيا
                            ويشترط استخدام نفس رقم الاتصال السابق.</p>
                        <div class="bt">
                            <a class="btn btn-primary" href="{{ route('website.homeArabic') }}">الصفحة الرئيسية</a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="foott">
                        <a href="{{ route('website.homeArabic') }}">
                            <img src="{{ asset('website/images/mm.svg') }}" alt="MicroSmart Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
