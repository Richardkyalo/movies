<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@1,9..144,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

    .card {
        position: relative;
        box-shadow: -1px 15px 30px -12px rgb(32, 32, 32);
        border-radius: 0.9rem;
        background-color: #fff;
        cursor: pointer;
    }

    .bt {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        margin-top: 0.8rem;
    }

    .svg {
        height: 25px;
        width: 25px;
        fill: #fff;
        transition: all 500ms ease;
    }
</style>

<body class="main">
    <div>
        <?php
        include "navigationbar.php"
        ?>
    </div>
    <div class="row minor">
        <div class="col col-12" style="color: #fff;">
            <h1 style="font-family: 'Times New Roman';">We bring you<br><span style="color: #ff7200;">Happines and Enjoyment </span> <br>Every day <br> <span style="color: #ff7200;">at Any Time you Want</span></h1>
            <p class="" style="font-family: Arial;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque
                expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus
                <br> a quae totam ipsa illum minus laudantium?
            </p>

            <!-- <a href="#" class="btn btn-block button">Welcome</a> -->
        </div>
    </div>
    <div class="row">
        <div class="col col-12">
            <h2 style="color: #ff7200;">Movies</h2>
        </div>
    </div>
    <div class="row px-5">
        <div class="col-lg-3 col-md-3 col-sm-12 card">
            <div class="row">
                <div class="col-lg-8 col-md-8"></div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p style="color: #ff7200">New
                        -<?php echo (rand(1, 5)); ?>%
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" style="text-align:center;">
                    <img src="./images/2.jpg" class="img-responsive" width="100%" alt="">
                </div>
            </div>
            <div class="row" style="text-align:center;">
                <h2>Nike X OFF-white</h2>
                <div> The 10: Air Jordan 1 off-white - Chicago</div>
                <div style="color:#ff7200;">Ksh. <?php echo (rand(10, 500)); ?></div>
            </div>
            <div class="row" style="text-align:center;">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <a href="" class="btn" style="color:#ff7200;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>Add To Cart
                    </a>
                </div>
            </div>
            <div class="row bt">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <button class="btn btn-block" style="background-color:springgreen; color:#fff;">Book Now</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <?php
                    $rating = 5;
                    for ($i = 1; $i <= 4; $i++) {
                        if ($i <= $rating) { ?>
                            <svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="color:springgreen">
                                <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
                            </svg>
                    <?php }
                    }
                    ?>

                </div>
            </div>
        </div>

    </div>
    <div class="row pt-3">
        <div class="col col-12">
            <h2 style="color: #ff7200;">Movies</h2>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem; ">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Play Trailer</h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4" style="text-align: end;">
                       <a href=""> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
                            <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" />
                        </svg>
                    </a>
                    </div>
                </div>
                <img class="img-fluid rounded-start" src="./images/2.jpg" style="background-size:cover;" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card 1</h5>
                    <p class="card-text">We give the feeling of Leisure anytime you wish </p>
                    <a href="#" class="btn button">BOOK</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
                <iframe src="https://www.youtube.com/embed/aS0v0gCRqac?si=FODwxF3pVpwHGejk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title">Card 2</h5>
                    <p class="card-text">What is making you not to be entertained if not you?</p>
                    <a href="#" class="btn button">BOOK</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100" style="width: 18rem;">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <p style="color: #ff7200">New
                            -<?php echo (rand(1, 5)); ?>%
                        </p>
                    </div>
                </div>
                <img class="card-img-top" src="./images/2.jpg" alt="Card image cap">
                <div class="card-body" style="text-align:center;">
                    <h5 class="card-title">Card 3</h5>
                    <p class="card-text">What is making you not to be entertained if not you?</p>
                    <a href="#" class="btn button">BOOK</a>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php
        include "footer.php"
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src=."/js/bootstrap.bundle.js"></script>
</body>

</html>