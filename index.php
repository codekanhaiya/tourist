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

    <link href="css/index.css" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <title>Tourist</title>
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
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>


    <!-- Searching Area  -->

    <div class="container-fluid searchbox">
      <h2>Your Welcome!</h2>
      <div class="penguin">
        <div class="penguin-head">
          <div class="face left"></div>
          <div class="face right"></div>
          <div class="chin"></div>
          <div class="eye left">
            <div class="eye-lid"></div>
          </div>
          <div class="eye right">
            <div class="eye-lid"></div>
          </div>
          <div class="blush left"></div>
          <div class="blush right"></div>
          <div class="beak top"></div>
          <div class="beak bottom"></div>
        </div>
        <div class="shirt">
          <div>💜</div>
        </div>
        <div class="penguin-body">
          <div class="arm left"></div>
          <div class="arm right"></div>
          <div class="foot left"></div>
          <div class="foot right"></div>
        </div>
      </div>
      
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search your best..." aria-label="Search">
            <button class="btn btn-outline-info" type="submit"><a href="visit.php"><i class="fas fa-search"></i></a></button>
        </form>
    </div>



    <!-- Customer Support  -->
    <div class="container-fluid box">
        <div class="row" style="text-align: center; color:#fff;"><u><h2>Your support</h2></u></div>
        <form class="custForm" action="post" method=sub/action.php>

            <div class="inputBox">
                <input type="text" name="username" autocomplete="off" required />
                <label>Name</label>
            </div>

            <div class="inputBox">
                <input type="text" name="databasename" autocomplete="off" required />
                <label>Email</label>
            </div>

            <div class="inputBox">
                <input type="password" name="password" autocomplete="off" required />
                <label>Contact</label>
            </div>

            <div class="inputBox">
                <textarea name="remark" rows="3" placeholder="write your remark here...."></textarea>
            </div>

            <input type="submit" name="submit" value="submit" />

        </form>
    </div>



    <!-- Footer -->

    <div class="container-fluid footer">
        <h3>@ Copyright 2022</h3>
    </div>




    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>

</body>

</html>