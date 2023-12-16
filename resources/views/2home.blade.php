<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('website/2ndhome/style.css')}}">

<link rel="stylesheet" href="{{asset('website/navbar/fonts/icomoon/style.css')}}">

    <title>Madni Atta Chakki</title>
    <style>
        .slode {
    margin: 20px;
    text-align: center;

}


.slider-container {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.slider {
    display: flex;
    transition: transform 1s ease-in-out;
    position: relative;
}

.slide {
    flex: 0 0 100%;
    box-sizing: border-box;
    position: relative;
}

.pehli {
    width: 100%;
    height: auto;
}

.arrow {
    position: absolute;
    top: 43%;
    transform: translateY(-50%);
    font-size: 24px;
    color: white;
    cursor: pointer;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px;
    border: none;
}

.prev {
    left: 0;
}

.next {
    right: 0;
}

.titles {
    color: rgb(122, 117, 117);
    letter-spacing: 5px;
    font-size: xx-large;
    text-align: center;
    font-weight: 800;
    margin-top: 20px;
}

@media (max-width: 991px) {
.titles {
margin-top: 15px;
}

.arrow {
top: 30%; 
}
}

@media (max-width: 767px) {
.titles {
margin-top: 10px; 
}

.arrow {
top: 20%;
}
}

.head {
    text-align: center;
    color: rgb(122, 117, 117);
    font-size: xx-large;
    letter-spacing: 10px;
}


.content-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

a.bantn {
    display: inline-block;
    position: relative;
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    cursor: pointer;
    transition: color 0.3s;
    overflow: hidden;
    background-color: red;
}

a.bantn::before {
    content: '';
    position: absolute;
    top: 10px;
    right: 0;
    width: 10%;
    height: 100%;
    background-color: red;
    transition: width 0.3s;
    z-index: -1;
}

a.bantn:hover::before {
    width: 100%;
}

/* Styling on hover */
a.bantn:hover {
    color: white;
}


.bantn {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    background-color: #3498db;
    color: #fff;
    border-radius: 5px;
    margin-left: auto;
    margin-right: 0;
   
}

.titles {
    display: inline-block;
    margin-right: 20px;
   
}

@media (max-width: 767px) {
    p {
        display: block;
        margin-right: 0;
    }

    .bantn {
        margin-left: 115px;
    }
}
.indicators {
display: flex;
justify-content: center;
margin-top: 10px; 
}

.indicator {
width: 10px;
height: 10px;
border-radius: 50%;
background-color: wheat;
margin: 0 5px; 
cursor: pointer;
}

.indicator.active {
background-color: red;
}

    </style>
</head>

<body class="slode">
    <h1 class="head">
        PRODUCTS
    </h1>
    <div class="content-container">
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <img src="{{('website/2ndhome/images/12.jpg')}}" alt="Product 1" class="pehli">
                    <button class="arrow prev" onclick="prevSlide()">&lt;</button>
                    <button class="arrow next" onclick="nextSlide()">&gt;</button>
                    <p class="titles">
                        |Sunridge Value Bundle|
                    </p>
                    
                        <a href="{{route('order_now')}}" class="bantn">BUY NOW</a>
                </div>
                <div class="slide">
                    <img src="{{asset('website/2ndhome/images/05.jpg')}}" alt="Product 2" class="pehli">
                    <button class="arrow prev" onclick="prevSlide()">&lt;</button>
                    <button class="arrow next" onclick="nextSlide()">&gt;</button>
                    <p class="titles">
                        |Sunridge Value Bundle|
                    </p>
                    
                        <a href="{{route('order_now')}}" class="bantn">BUY NOW</a>
                    
                </div>
                <div class="slide">
                    <img src="{{asset('website/2ndhome/images/06.jpg')}}" alt="Product 3" class="pehli">
                    <button class="arrow prev" onclick="prevSlide()">&lt;</button>
                    <button class="arrow next" onclick="nextSlide()">&gt;</button>
                    <p class="titles">
                        |Sunridge Lentils And Pulses|
                    </p>
                        <a href="" class="bantn">BUY NOW</a>
                    
                </div>
                <div class="slide">
                    <img src="{{asset('website/2ndhome/images/07.jpg')}}" alt="Product 4" class="pehli">
                    <button class="arrow prev" onclick="prevSlide()">&lt;</button>
                    <button class="arrow next" onclick="nextSlide()">&gt;</button>
                    <p class="titles">
                        |Sunridge Premium Quality Besan|
                    </p>
                    <a href="{{route('order_now')}}" class="bantn">BUY NOW</a>
                </div>
                <div class="slide">
                    <img src="{{asset('website/2ndhome/images/08.jpg')}}" alt="Product 5" class="pehli">
                    <button class="arrow prev" onclick="prevSlide()">&lt;</button>
                    <button class="arrow next" onclick="nextSlide()">&gt;</button>
                    <p class="titles">
                        | Sunridge Iodized Salt |
                    </p>
                    <a href="{{route('order_now')}}" class="bantn ">BUY NOW</a>

                </div>
                <div class="slide">
                    <img src="{{asset('website/2ndhome/images/rice-banner.jpg')}}" alt="Product 6" class="pehli">
                    <button class="arrow prev" onclick="prevSlide()">&lt;</button>
                    <button class="arrow next" onclick="nextSlide()">&gt;</button>
                    <p class="titles">
                        | Sunridge Premium Quality Rice |
                    </p>
                    <a href="{{route('order_now')}}" class="bantn ">BUY NOW</a>
                </div>
            </div>
        </div>
    </div>
    <div class="indicators">
        <div class="indicator" onclick="showSlide(0)"></div>
        <div class="indicator" onclick="showSlide(1)"></div>
        <div class="indicator" onclick="showSlide(2)"></div>
        <div class="indicator" onclick="showSlide(3)"></div>
        <div class="indicator" onclick="showSlide(4)"></div>
        <div class="indicator" onclick="showSlide(5)"></div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-X1GkNFIu1ASKv8XmBy8lF/SrqAE2kJKAogE+ppVVq1CgOOHQZ3/NszQ2ZqIAX3jN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script>
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        let currentIndex = 0;

        function showSlide(index) {
            slider.style.transform = `translateX(-${index * 100}%)`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        }

        setInterval(nextSlide, 3000); 
    </script>
    <script>
        function showSlide(index) {
    slider.style.transform = `translateX(-${index * 100}%)`;
    updateIndicators(index);
}

function updateIndicators(index) {
    const indicators = document.querySelectorAll('.indicator');
    indicators.forEach((indicator, i) => {
        indicator.classList.toggle('active', i=== index);
    });
}

    </script>
</body>

</html>