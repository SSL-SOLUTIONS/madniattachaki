
@include('aboutheader')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('website/about/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

<link rel="stylesheet" href="{{asset('website/navbar/fonts/icomoon/style.css')}}">
<link rel="icon" type="image/jpeg" href="{{ asset('website/favicon.jpeg') }}">
    <title>Madni Atta Chakki</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="who text-center mt-3">WHO <span class="we">WE ARE?</span></h1>

            <h1 class="cp">COMPANY PROFILE</h1>
            <p class="text-center para">Unity Foods acquired Madni Atta in 2020, with its first production being Madni Atta
                Whole Wheat Flour. Madni Atta Foods began its launch operations from Port Qasim, Karachi in 2015 and
                launched
                its first product in 2017 by the name of Madni Atta Whole Wheat Flour. Over the years, it has been
                successfully producing high quality whole wheat flour with all its natural fiber, vitamins and minerals,
                fulfilling a major portion of every household’s nutritional needs. Madni Atta Chakki Atta is produced in
                Pakistan’s first and only state-of-the-art PESA mill – the latest Swiss technology delivering superior
                quality flour.

                The milling process consistently delivers high quality of whole wheat flour, removing all traces of
                dirt,
                bacteria and other impurities, giving pure goodness to every meal. It has also been certified by PSQCA
                (Pakistan Standards and Quality Control Authority) as a whole wheat flour, while assuring their
                customers
                that their rotis will remain soft and fresh for 6 hours. This claim is also backed by independent lab
                tests,
                making Madni Atta the only flour brand available nationwide with unparalleled quality. The brand has a
                distribution footprint across 52 towns nationwide makes us proud to be a part of every household.</p>
        </div>
    </div><br>
    <div class="ab-video">
        <video autoplay muted loop>
            <source src="https://sunridgefoods.com/assets/video/about-us/video-02.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div>
        <h1 class="text-center mt-5 c-info">COMPANY INFORMATION</h1>
    </div>

    <div class="container contain">
        <div class="row text-center">
            <div class="col-lg-2 icon-hover mb-3">
                <i class="fas fa-building icony"></i>
                <p class="status">Status of the Company</p>
                <p class="private ">Private Limited Company</p>
            </div>
            <div class="col-lg-2 icon-hover mb-3">
                <i class="fas fa-building icony"></i>
                <p class="status">Company Registration</p>
                <p class="private">Number K-0023133</p>
            </div>
            <div class="col-lg-2 icon-hover mb-3">
                <i class="fas fa-money-bill icony"></i>
                <p class="status">National Tax</p>
                <p class="private">Number 0698412-6</p>
            </div>
            <div class="col-lg-2 icon-hover mb-3">
                <i class="fas fa-phone icony"></i>
                <p class="status">Phone</p>
                <p class="private">+923011114504</p>
            </div>
            <div class="col-lg-2 icon-hover mb-3">
                <i class="fas fa-envelope icony"></i>
                <p class="status">Email</p>
                <p class="private">info@madniattachakki.com</p>
            </div>
            <div class="col-lg-2 icon-hover mb-3">
                <i class="fas fa-map-marker icony"></i>
                <p class="status">Office</p>
                <p class="private">LandMark Plaza,Jail Road,Lahore</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center">
            <img src="{{asset('website/about/images/images-removebg-preview.png')}}" alt="">
            <h1 class="our mt-4">Our Vision</h1>
            <p class="para2">
                We support our leadership culture through distinctive systems and policies which ensure open
                communication and foster a healthy work environment for its employees - the company’s partners in
                success.
                Through integrity, accountability, passion, humility, simplicity and a focus on success, we have created
                a vibrant company culture where ideas can blossom, people can thrive and success can flourish.
            </p>
        </div>
    </div>
    <div class="ab-video">
        <video autoplay muted loop>
            <source src="https://sunridgefoods.com/assets/video/about-us/vision.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>


    <div class="container">
        <div class="text-center mt-4">
            <img src="{{asset('website/about/images/mission-img.png')}}" alt="">
            <h1 class="our mt-4">Our Mission</h1>
            <p class="para2">
                We have taken on a mission to introduce new products with improved quality in its line of business that
                will continuously help improve a company’s profitability and meet its financial commitments.

                It further commits to focus on the professional growth of its employees and give a fair return to its
                shareholders while also complying with the best practices of Corporate Governance.
            </p>
        </div>
    </div>
    <div class="ab-video">
        <video autoplay muted loop>
            <source src="https://sunridgefoods.com/assets/video/about-us/mission.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</body>
</html>
@include('footer')