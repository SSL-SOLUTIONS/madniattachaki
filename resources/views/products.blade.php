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
    @foreach($products as $product)
        <div class="product-container">
            <h1 class="hasa">{{$product->title}}</h1>
            <p class="ranga">{{$product->description}}</p>
            
            <img src="{{asset('admin/images/products/' . $product->image)}}" alt="" class="img-fluid">
        </div>
       @endforeach
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