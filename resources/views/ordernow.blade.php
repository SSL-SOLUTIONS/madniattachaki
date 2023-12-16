@include('ordernowheader')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .bod {
            background-color: rgb(236, 233, 233);
            font-family: sans-serif;
            text-align: center;
        }

        .formi {
            padding: 20px;
            border-radius: 8px;
            width: 50%;
            display: inline;
        }
        .form-control{
            border: 1px solid rgba(255, 48,0, 1);

        }

        label {
            display: flex;
            align-items: center;
            /* Align items vertically */
            margin-bottom: 8px;
        }

        input {
            width: 50%;
            padding: 8px;
            margin-right: 8px;
            /* Add margin between checkbox and text */
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input:hover {
            border-color: rgba(255, 48, 0, 1);
        }

        .smjh {
            color: rgba(255, 48, 0, 1);
            font-size: 60px;
          
        }

        .ovde {
            font-size: 60px;
            color: rgb(151, 145, 145);
            font-weight: 100;
            text-align: center;
        }

        .pakc {
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            font-size: 19px;
            margin-top: 20px;
            /* Adjust the margin as needed */
        }

        
        /* Media query for small screens (up to 767px) */
        @media only screen and (max-width: 767px) {
            .custom-checkbox input {
                margin-top: -0px;
                /* Adjust the margin for small screens */
            }
        }

        /* Media query for medium screens (768px to 991px) */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .custom-checkbox input {
              
                margin-top: -1px;
            }
        }

        /* Media query for large screens (992px and above) */


        .custom-checkbox {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .custom-checkbox input {
            margin-right: 10px;
        }

        .custom-checkbox label {
            flex: 1;
        }
        .enchhy{
            text-align: left;
            font-size: 26px;
            font-weight: 200;
            margin-top: 40px;
        }
    </style>
</head>

<body class="bod">
    <div class="text-center">
    <h1><b class="smjh">SUNRIDGE ONLINE</b></h1>
    <h1><b class="ovde">ORDER FORM</b></h1>
    </div>

    <div class="container">
        <form class="formi">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <label for="name" style="text-align: start;" class="labl"><b>Full Name</b><span
                            style="color: rgba(255,48,0,1);"><b>*</b></span></label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="">
                </div>
                <div class="col-md-6 col-lg-6">
                    <label for="phone" style="text-align: start;"><b>Phone Number</b><span
                            style="color: rgba(255,48,0,1);"><b>*</b></span></label>
                    <input type="tel" id="phone" name="phone" class="form-control" required
                        placeholder="+92 3---------">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <label for="address" style="text-align: start;"><b>Address</b><span
                            style="color: rgba(255,48,0,1);"><b>*</b></span></label>
                    <input type="text" id="address" name="address" class="form-control" required placeholder="">
                </div>
                <div class="col-md-6 col-lg-6">
                    <label for="city" style="text-align: start;"><b>City</b><span
                            style="color: rgba(255,48,0,1);"><b>*</b></span></label>
                    <select id="city" name="city" class="form-control orange-border" required placeholder="choose...">
                        <option disabled>Choose</option>
                        <option value="city1">Karachi</option>
                        <option value="city2">Lahore</option>
                        <option value="city3">Islamabad</option>
                        <option value="city4">Rawalpindi</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <h1 class="pakc"><b>Package Type</b></h1>
                    <ul>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package1" class="form-check-input">
                            <label for="package1" class="form-check-label"><span>Fortified Chakki Atta - 5 kg
                                    (Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Fortified Chakki Atta - 10 kg
                                    (Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Super Fine - 5 kg
                                    (Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Super Fine - 10 kg
                                    (Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge White Chakki - 5 kg
                                    (Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge White Chakki - 10 kg(Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Digestive Atta - 2 kg(Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Digestive Atta - 5 kg(Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Maida - 500 gm(Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Maida - 1 kg(Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Maida - 1x6 kg(Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Maida - 500x12 gm(Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Maida - 1x12 kg(Rs.)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Basmati Rice-5 kg (Rs. <b style="color: rgba(255, 48,0, 1);">2675</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge  Basmati Rice - 1kg (Rs.<b style="color: rgba(255, 48,0, 1);">515</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Basmati Rice - kg (Rs.<b style="color: rgba(255, 48,0, 1);">2560</b>)
                                </span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Barkat Rice - 1 kg
                                    (Rs.<b style="color: rgba(255, 48,0, 1);">280</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Barkat Rice - 5kg
                                    (Rs.<b style="color: rgba(255, 48,0, 1);">1390</b>) </span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Sella Gold Rice - 1 kg
                                    (Rs.<b style="color: rgba(255, 48,0, 1);">450</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Sella Gold Rice - 5 kg (Rs.<b style="color: rgba(255, 48,0, 1);">2240</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Basmati Rice-1 kg(Rs.<b style="color: rgba(255, 48,0, 1);">260</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Umdah Rice-       5 kg (Rs.<b style="color: rgba(255, 48,0, 1);">1290</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Daal Moong - 500 gm (Rs.<b style="color: rgba(255, 48,0, 1);">180</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Daal Moong - 1 kg (Rs.<b style="color: rgba(255, 48,0, 1);">340</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Daal Chana - 500 gm (Rs.<b style="color: rgba(255, 48,0, 1);">175</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Daal Chana - 1 kg (Rs.<b style="color: rgba(255, 48,0, 1);">335</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Daal Masoor - 500 gm (Rs.<b style="color: rgba(255, 48,0, 1);">215</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Daal Masoor - 1 kg (Rs.<b style="color: rgba(255, 48,0, 1);">420</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span> Daal Sabut Masoor- 500 gm (Rs.<b style="color: rgba(255, 48,0, 1);">200</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span> Daal Sabut Masoor - 1 kg (Rs.<b style="color: rgba(255, 48,0, 1);">390</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Daal Mash - 500 gm (Rs.<b style="color: rgba(255, 48,0, 1);">260</b></span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Daal Mash - 1 kg (Rs.<b style="color: rgba(255, 48,0, 1);">520</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Daal Box - 1kg x 5 (Rs.<b style="color: rgba(255, 48,0, 1);">-</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Besan - 500 gm (Rs.<b style="color: rgba(255, 48,0, 1);">180</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Besan - 1 kg (Rs.<b style="color: rgba(255, 48,0, 1);">350</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Suji - 250 gm (Rs.<b style="color: rgba(255, 48,0, 1);"></b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Suji - 500 gm (Rs.<b style="color: rgba(255, 48,0, 1);"></b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Iodized Salt - 800 gm (Rs.<b style="color: rgba(255, 48,0, 1);">40</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Pink Salt - 800 gm (Rs.<b style="color: rgba(255, 48,0, 1);">50</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Sugar - 1 kg (Rs.<b style="color: rgba(255, 48,0, 1);">-</b>)</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="checkbox" id="package2" class="form-check-input">
                            <label for="package2" class="form-check-label"><span>Sunridge Sugar - 5 kg (Rs.<b style="color: rgba(255, 48,0, 1);">-</b>)</span></label>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <h1 class="pakc"><b>Quantity <span style="color: rgba(255, 48,0, 1);">*</span></b></h1>
                    <ul>
                        <li class="custom-checkbox">
                            <input type="radio" id="package1" class="form-check-input">
                            <label for="package1" class="form-check-label"><span>01</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="radio" id="package1" class="form-check-input">
                            <label for="package1" class="form-check-label"><span>02</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="radio" id="package1" class="form-check-input">
                            <label for="package1" class="form-check-label"><span>03</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="radio" id="package1" class="form-check-input">
                            <label for="package1" class="form-check-label"><span>04</span></label>
                        </li>
                        <li class="custom-checkbox">
                            <input type="radio" id="package1" class="form-check-input">
                            <label for="package1" class="form-check-label"><span>05</span></label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <h1 class="pakc"><b>Particular Instruction</b></h1>
                            <input type="text" id="emptyInput" class="form-control" style="border: 1px solid rgba(255, 48,0, 1);"> <!-- Empty input element -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <h1 class="enchhy"><b>SUB TOTAL: RS 0</b></h1>
                    <h1 style="text-align: left; font-size: 18px; font-weight: 500;"><b>Delivery Charges: Rs 100</b></h1>
                    <h1 class="enchhy"><b>TOTAL: Rs 100</b></h1>
                        <a href=""  class="btn btn danger" style="background-color: rgba(255, 48, 0, 1); width: 100%; padding: 10px; color: white; margin-top: 30px;">SUBMIT</a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@include('footer')
</html>