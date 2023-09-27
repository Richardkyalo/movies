<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@1,9..144,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="col-sp col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6" style="width:290px;height: 500px; text-align: center;">
    <div class="product-item">
      <div class="product-image-action">
        <div class="product-label">

          <span class="label new">New</span>
          <span class="label soldout">
            <script>
              // Generate a random discount percentage between 5% to 40%
              var randomDiscount = Math.floor(Math.random() * 8) * 5 + 5;
              document.write("-" + randomDiscount + "%");
            </script>
          </span>
        </div>
        <div class="product-image">
          <a href="">
            <img class="img-fluid blur-up lazyload" data-src="./images/6.jpg" alt="image" title="image" style="width:260px;height:260px" />
            <img class="img-fluid blur-up lazyload product-imghover" src="./images/6.jpg" data-src="" alt="image" title="image" />
          </a>
        </div>
        <div class="product-action">
          <ul>

            <li class="actions-addcart" data-placement="top" title="add to cart">
              <a href="" class="btn "><i class="icon ti-shopping-cart"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="product-details">
        <h3 class="product-title"><a href="product-details.php"></a></h3>
        <h4 class="product-vendor"></h4>
        <div class="product-starrating">
          <?php
          // Assuming the product rating is stored as a numerical value in the database
          $rating = 5;
          for ($i = 1; $i <= 5; $i++) {
            if ($i <= $rating) {
              echo '<i class="spr-icon fa fa-star"></i>';
            } else {
              echo '<i class="spr-icon fa fa-star-o"></i>';
            }
          }
          ?>
        </div>
        <div class="product-price">
          <span class="compare-price">4</span>
          <span class="sale-price">4</span>
          <a href="">
            <button class="btn btn-primary">View product</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>