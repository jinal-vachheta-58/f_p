<?php
session_start();
include ("includes/connect.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FASHION PARADISE</title>
  <link rel="stylesheet" href="bootstrap.css">
  <!-- <link rel="stylesheet" href="home_page_style.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
    integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">


  <!-- 1 font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">


  <!-- 2 font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&display=swap"
    rel="stylesheet">

  <!-- font awsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-color: bisque;
    }

    .top-navbar {
      font-size: 35px;
      font-family: "Orbitron", sans-serif;
      font-optical-sizing: auto;
      font-weight: 300;
      font-style: normal;
    }


    .top-navbar {
      font-family: "Noto Serif Display", serif;
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
      font-variation-settings:
        "wdth" 100;
    }

    .nav-item {
      margin-left: 5px;
      margin-right: 5px;
      font-size: large;
    }

    .n {
      margin-left: 5px;
      margin-right: 5px;
      font-size: large;
    }

    .box {
      background-color: #fff;
      margin: 0px 0px 30px;
      border: solid 1px #e6e6e6;
      padding: 20px;
      box-shadow: 0 1ox 5px rgba(0, 0, 0, 0.1);
    }

    #advantage {
      text-align: center;
      display: flex;
      justify-content: space-between;
    }

    #advantage .box .icon {
      position: absolute;
      font-size: 120px;
      width: 100%;
      text-align: center;
      top: -20px;
      height: 100%;
      float: left;
      color: #eeeeee;
      transition: all 0.2s ease-out;
      z-index: 1;
      box-sizing: border-box;
    }

    #advantages .box h3 {
      position: relative;
      margin: 0px 0px 20px;
      font-weight: 300;
      text-transform: uppercase;
      z-index: 2;
    }

    #advantages .box h3 a:hover {
      text-decoration: none;

    }

    #advantages .box p {
      position: relative;
      color: #555555;
      z-index: 2;
    }

    #hotbox {
      text-transform: uppercase;
      font-size: 36px;
      color: #4993e4;
      font-weight: 100;
      text-align: center;
      /* margin-top: 20px; */
    }

    .shop_by_cat {
      padding: 20px;
      border-radius: 35px;
      font-family: "Noto Serif Display", serif;
      font-optical-sizing: auto;
      font-weight: 700;
      font-style: normal;
      font-variation-settings:
        "wdth" 100;
      color: aqua;
    }

    .custom-hr {
      border: 7px solid red;
      width: 100%;
      /* Adjust the width as needed */
    }

    small {
      font-size: large;
    }

    .nav-item:hover {
      /* border: 1px solid brown; */
      border-bottom: 1px solid black;
    }

    /* // <uniquifier>: Use a unique and descriptive class name
// <weight>: Use a value from 400 to 900 */

    /* .orbitron-<uniquifier> {
  font-family: "Orbitron", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
} */
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container bg-dark ">
      <a class="top-navbar navbar-brand text-light " href="#">FASHION PARADISE</a>

      <form class="d-flex" role="search">
        <button class="btn btn-outline-light text-light bg-success" type="submit"><a
            class="text-light text-decoration-none" href="signup.php">Register</a></button> &nbsp;
        <button class="btn btn-outline-light text-light bg-success" type="submit"><a
            class="text-light text-decoration-none" href="login.php">Login</a></button>
      </form>
    </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container ">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop_page.php">Shop</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              My Account
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Order History</a></li>
              <li><a class="dropdown-item" href="customer_cart.php">Cart</a></li>
              <li><a class="dropdown-item" href="cutomer_wishlist.php">Wishlist</a></li>

              <li><a class="dropdown-item" href="#">Edit Account</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>

          <?php
          if (isset($_SESSION["username_of_fashion_paradise"])) {
            $user = $_SESSION["username_of_fashion_paradise"];
            echo '<li class="n">
welcome ' . $user . '</li>';
          } else {

            echo '<li class="n">
  welcome user</li>';
          }
          // echo $_SESSION["username_of_fashion_paradise"];
          
          // if(isset($_SESSION["username_of_fashion_paradise"])) {
//   $user = $_SESSION["username_of_fashion_paradise"];
//   echo '<li class="n">welcome '.$user.'</li>';
// } else {
//   echo '<li class="n">welcome user</li>';
// }
          
          ?>
          <!-- <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li> -->
        </ul>
        <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->

      </div>
    </div>
  </nav>

  <!-- offers bar -->

  <div id="carouselCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="photos/temp1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <div class="carousel-item">
        <img src="photos/temp3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <div class="carousel-item">
        <img src="photos/temp4.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <div class="carousel-item">
        <img src="photos/temp5.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <div class="carousel-item">
        <img src="photos/temp6.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>

      <div class="carousel-item">
        <img src="photos/temp7.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <br>
  <hr class="custom-hr">
  <br>


  <div id="hotbox">
    <div class="box">
      <div class="shop_by_cat container bg-dark text-light">
        <div class="col-md-12">
          <h1> SHOP BY CATEGORY</h1>
        </div>
      </div>
    </div>
  </div>




  <div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">

        <div class="col text-center">
            <div class="card h-100">
                <img src="photos/ik1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kurta</h5>
                    <h3 class="card-text">40-70% OFF</h3>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary"><a href='shop_page.php?category_id=1' class='nav-link text-dark'>SHOP NOW</a></small>
                </div>
            </div>
        </div>

      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Blouse</h5>
            <h3 class="card-text">30-35% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=10' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>
      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Saree</h5>
            <h3 class="card-text">20-30% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=11' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ethinc wear</h5>
            <h3 class="card-text">10-20% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=12' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Leggings</h5>
            <h3 class="card-text">40-80% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=13' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik6.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Salwar Kamiz</h5>
            <h3 class="card-text">30-50% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=14' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik7.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Duppatta</h5>
            <h3 class="card-text">30-50% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=15' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik8.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jacket</h5>
            <h3 class="card-text">20-30% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=16' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik9.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Lehenga Choli</h5>
            <h3 class="card-text">30-50% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=17' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik10.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Western Wear</h5>
            <h3 class="card-text">30-50% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=18' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik11.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">T-shirt</h5>
            <h3 class="card-text">10-20% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=19' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>


      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik12.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jeans</h5>
            <h3 class="card-text">10-20% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=20' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>


      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik13.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jumpsuit</h5>
            <h3 class="card-text">10-20% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=21' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>


      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik14.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Shrug</h5>
            <h3 class="card-text">10-20% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=22' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>


      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik15.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Blazer</h5>
            <h3 class="card-text">10-20% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=23' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik16.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Coat</h5>
            <h3 class="card-text">10-20% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=24' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card h-100">
          <img src="photos/ik17.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">skirt</h5>
            <h3 class="card-text">10-20% OFF</h3>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><a href='shop_page.php?category_id=25' class='nav-link text-dark'>SHOP NOW</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-dark mt-3 mb-0">
    <h1 class="text-dark" style="margin-bottom:0%; height:200px;">#</h1>
  </div>
</body>

</html>

<?php
// var_dump($_SESSION["username_of_fashion_paradise"]);
?>