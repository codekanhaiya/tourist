<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans|Heebo">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


    <link href="css/visit.css" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <title>Your things</title>
</head>

<body>

    <!-- Navbar Designing -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Navbar</a>
        </div>
    </nav>

    <!-- Top slider -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-angle-double-up' style='font-size:24px'></i></button>





    <!-- Swiper -->
    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="img/c1.jpg">
            <div class="text">Caption One</div>
        </div>

        <div class="mySlides fade">
            <img src="img/c2.avif">
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <img src="img/c3.avif">
            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>



    <!-- Details of property -->
    <div class="container-fluid details">
        <div class="row">
            <div class="card mb-3" >
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/p1.jpg" class="img-fluid rounded-start propImg" alt="propert-image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Property 1</h5>
                            <p class="card-text">This is best tourist places. "ABOUT" this property like it's location and many things. this..................................</p>
                            <p class="card-text"><small class="text-muted">In Hydrabad</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card mb-3" >
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/p1.jpg" class="img-fluid rounded-start propImg" alt="propert-image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Property 2</h5>
                            <p class="card-text">This is best tourist places. "ABOUT" this property like it's location and many things. this..................................</p>
                            <p class="card-text"><small class="text-muted">In Hydrabad</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card mb-3" >
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/p1.jpg" class="img-fluid rounded-start propImg" alt="propert-image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Property 3</h5>
                            <p class="card-text">This is best tourist places. "ABOUT" this property like it's location and many things. this..................................</p>
                            <p class="card-text"><small class="text-muted">In Hydrabad</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Footer -->

    <div class="container-fluid footer">
        <h3>@ Copyright 2022</h3>
    </div>



    <script type="text/javascript" src="js/visit.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>

</body>

</html>