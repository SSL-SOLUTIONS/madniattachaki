<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Madni Atta Chakki</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="{{asset('website/navbar/fonts/icomoon/style.css')}}">
<link rel="icon" type="image/jpeg" href="{{ asset('website/favicon.jpeg') }}">
     
        <style>
            .cliak {
    font-family: sans-serif;
    text-align: center;
}

.love {
    color: red;
    font-size: 50px;
    font-weight: bold;
    word-spacing: 10px;
}

.wed {
    font-size: 50px;
    word-spacing: 10px;
    font-weight: lighter;
    margin-top: 20px;
    text-align: center;
}

/* Custom styles for the horizontal card */
.horizontal-card {
    display: flex;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 40px;
    /* Adjusted top and bottom padding */
    margin-bottom: 20px;
    border-radius: 40px;
    width: 80%;
    margin: 80px auto 0;
    /* Center the card horizontally */
    align-items: center;
    /* Center items horizontally */
    flex-wrap: wrap;
    /* Allow items to wrap to the next line on smaller screens */
    margin-bottom: 50px;
}

.horizontal-card .card-item {
    flex: 1;
    /* Each item takes equal width */
    text-align: center;
    padding: 20px;
}

.horizontal-card i {
    font-size: 2.5em;
    margin-bottom: 15px;
    /* Adjusted margin */
}

.horizontal-card h1 {
    font-weight: bold;
    margin: 0;
    font-size: 1.2em;
}

.horizontal-card p {
    font-size: 0.8em;
    margin: 0;
}

.hyd:hover,
.pyrah:hover {
    color: rgba(255, 48, 0, 1);
    cursor: pointer;
}

.form-container {
    width: 100%;
    margin-bottom: 10px;
}
        </style>

</head>
@include('contactheader')

<body class="cliak">
    <div  class="container-fluid bg-light">
        <div class="">
            <h1 class="wed">WE’D <span class="love">LOVE TO HEAR</span></h1>
        <h1 class="wed">FROM YOU</h1>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="horizontal-card text-center">
                    <div class="card-item">
                        <i class="fa-regular fa-envelope" style="font-size: 50px; color: rgba(255, 48,0, 1);"></i>
                        <h1 class="hyd">OFFICIAL E-MAIL</h1>
                        <p class="pyrah">info@madniattachakki.com</p>
                    </div>

                    <div class="card-item">
                        <i class="fa-solid fa-mobile-retro" style="font-size: 50px; color: rgba(255, 48,0, 1);"></i>
                        <h1 class="hyd">CONTACT NUMBER</h1>
                        <p class="pyrah">+92 301 1114504</p>
                    </div>

                    <div class="card-item">
                        <i class="fa-solid fa-location-dot" style="font-size: 50px; color: rgba(255, 48,0, 1);"></i>
                        <h1 class="hyd">OFFICE LOCATION</h1>
                        <p class="pyrah">landmark Plaza ,jail road,Lahore</p>
                    </div>
                </div>
            </div>
        </div>
        <iframe width="100%" height="450" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13602.428231413262!2d74.3469248!3d31.5349506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905d3e3ae6b77%3A0x157a2f53f97b67c6!2sSSL%20SOLUTIONS!5e0!3m2!1sen!2s!4v1701933478588!5m2!1sen!2s"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>


        <div class="container-fluid bg-light">
            <h1><b>CONTACT</b> US</h1>
            <div class="row">
                <div class="col-12 col-md-6 order-md-2 form-container mx-auto text-center">
                    <!-- Contact Form -->
                    @if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
									@endif
									@if(session('success'))
									<div class="alert alert-success">
										{{ session('success') }}
									</div>
									@endif
                    <form action="{{route('contactus.store')}}" method="POST">
					@csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name"></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
                                    required style="border: 1px solid rgba(255, 48,0, 1);">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="email"></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email Address" required style="border: 1px solid rgba(255, 48,0, 1);">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="phone"></label>
                                <input type="number" class="form-control" id="phone" name="phone"
                                    placeholder="Mobile Number" required style="border: 1px solid rgba(255, 48,0, 1);">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="message"></label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Message Subject" required
                                    style="border: 1px solid rgba(255, 48,0, 1);">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="message"></label>
                                <textarea class="form-control" id="message" name="message" rows="5"
                                    placeholder="Type Your Message Here" required
                                    style="border: 1px solid rgba(255, 48,0, 1);"></textarea>
                            </div>
                        </div>
                        <div class="button">
                            <button type="submit" class="btn btn-danger"
                                style="background-color: rgba(255, 48, 0, 1);">Send Email</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (Optional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
@include('footer')