@include('productheader')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madni Atta Chakki</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('website/products/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

<link rel="stylesheet" href="{{asset('website/navbar/fonts/icomoon/style.css')}}">
  
</head>
<body class="fivth">

<div class="bg-light">
    <div class="custo-container">
        <div class="product-container">
            <h1 class="hasa">SUNRIDGE FORTIFIED ATTA</h1>
            <p class="ranga">Our range of fortified atta is extremely healthy and nutritious and is packaged without any human interaction at the PESA Mill!</p>
            <a href="#" class="aawf"  >View Details</a>
            <img src="{{asset('website/products/images/product-sunridge-fortified-ata.jpg')}}" alt="" class="img-fluid">
        </div>

        <div class="product-container">
            <h1 class="hasa">SUNRIDGE PREMIUM QUALITY RICE</h1>
            <p class="ranga">Sunridge Basmati Rice is sourced from the fertile plains of Punjab irrigated by flowing riverine water rich in natural nutrients, yielding high-quality and nutrient-rich rice grains</p>
            <a href="#"  class="aawf" >View Details</a>
            <img src="{{asset('website/products/images/product-sunridge-premium-quality-rice-1.jpg')}}" alt="" class="img-fluid">
        </div>

        <div class="product-container">
            <h1 class="hasa">SUNRIDGE PREMIUM QUALITY MAIDA</h1>
            <p class="ranga">Sunridge’s goal is to provide you with exceptional quality products. Its maida is made with the finest wheat grain, and is filled with proteins, carbohydrates and fiber.</p>
            <a href="#" class="aawf"  >View Details</a>
            <img src="{{asset('website/products/images/product-sunridge-premium-quality-maida-1.jpg')}}" alt="" class="img-fluid">
        </div>

        <div class="product-container">
            <h1 class="hasa">SUNRIDGE LENTILS AND PULSES</h1>
            <p class="ranga">Our daal range is full of proteins, healthy carbs, fiber and tons of other nutrients. This is because Sunridge daal range is processed and packed in our state-of-the-art facility with a completely automated process.</p>
            <a href="#" class="aawf"   >View Details</a>
            <img src="{{asset('website/products/images/product-sunridge-lentils-and-pulses.jpg')}}" alt="" class="img-fluid">
        </div>

        <div class="product-container">
            <h1 class="hasa">SUNRIDGE PREMIUM QUALITY SUJI</h1>
            <p class="ranga">Sunridge does not compromise on quality and nutrition. Our Suji is obtained from the best durum wheat. It’s a rich source of Thiamine, folate and Vitamin B. It kills hunger and aids in losing weight.</p>
            <a href="#" class="aawf"   >View Details</a>
            <img src="{{asset('website/products/images/product-sunridge-suji.jpg')}}" alt="" class="img-fluid">
        </div>

        <div class="product-container">
            <h1 class="hasa">SUNRIDGE PREMIUM QUALITY BESAN</h1>
            <p class="ranga">Sunridge besan comes from freshly grounded chickpeas, rich in protein, fiber, iron and other minerals. Sunridge besan is packed through automated machines, without any human interaction, making the product safe and hygienic.</p>
            <a href="#" class="aawf"  >View Details</a>
            <img src="{{asset('website/products/images/product-sunridge-premium-quality-besan.jpg')}}" alt="" class="img-fluid">
        </div>

        <div class="product-container">
            <h1 class="hasa">SUNRIDGE PREMIUM QUALITY WHITE CRYSTAL SUGAR</h1>
            <p class="ranga">Sunridge White Crystal Sugar is double refined, sparkling white and easy to dissolve. Free from dirt and artificial colors, this sugar is made in extremely hygienic conditions.</p>
            <a href="#"  class="aawf" >View Details</a>
            <img src="{{asset('website/products/images/product-sunridge-sugar.jpg')}}" alt="" class="img-fluid">
        </div>

        <div class="product-container">
            <h1 class="hasa">SUNRIDGE IODIZED SALT</h1>
            <p class="ranga">Sunridge iodized salt is the ideal salt for seasoning dishes, sautéing vegetables, adding in soups, curries, and salads. The salt is fortified in iodine which helps in the mental development of children, and it also prevents iron deficiency.</p>
            <a href="#"  class="aawf" >View Details</a>
            <img src="{{asset('website/products/images/product-sunridge-premium-quality-salt.jpg')}}" alt="" class="img-fluid">
        </div>

        <div class="product-container">
            <h1 class="hasa">SUNRIDGE VALUE BUNDLE</h1>
            <p class="ranga">This bundle strives to provide quality and the best economy to consumers and serve basic household necessities. The main intent of this box is to provide; One-Stop Solution: Fulfills your monthly grocery needs.</p>
            <a href="#" class="aawf"  >View Details</a>
            <img src="{{asset('website/products/images/product-sunridge-value-bundlenew-1.jpg')}}" alt="" class="img-fluid">
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js (optional, but needed for some Bootstrap features) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
  // Add animation class to product containers when the page is loaded
  document.addEventListener('DOMContentLoaded', function () {
      var productContainers = document.querySelectorAll('.product-container');
      productContainers.forEach(function (container) {
          container.classList.add('show');
      });
  });
</script>

</body>
</html>
  @include('footer')