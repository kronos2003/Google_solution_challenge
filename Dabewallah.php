<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Dabewallah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
  <link rel="stylesheet" href="Dabewallah.css">
</head>

<body>
  <!--Navbar starts-->
  <nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <img src="Main-logo1.png" class="Main_logo1 mb-5">
          <li class="nav-item">
            <a class="nav-link active about_us" href="#about-us">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link contact_us" href="#contact-us">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <a href="login.php" class="btn btn-login" type="submit">Login</a>
        </form>
      </div>
    </div>
  </nav>
  <!--Navbar ends-->

  <!--Main container-->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="font-title mt-5">The Pride of Mumbai</h1>
        <p class="subtitle">The lifeline of Mumbai here to satisfy your hunger and give you the experience of the
          dabawallah timing!</p>
        </p>
        <br><br>
        <a href="#our-service" class="btn-main">Get started</a>
      </div>
      <div class="col-md-5">
        <img class="Main-img" src="dabewallah.png">
      </div>
    </div>
  </div>
  <!--Main container ends-->
  <br><br>

  <!--About us start-->
  <div class="container-fluid  p-1 aboutpage" id="about-us" style="margin-top:100px;">
    <h1 class="text-center font-about-us text-light mt-4 ">About us</h1>
    <div class="container p-3">
      <div class="row">
        <div class="col-4">
          <img src="Main_Logo2.png" class="Main_logo2" style="margin-top: -100px;">
        </div>
        <div class="col-8">
          <p class="about-text mt-2">This webapp was developed with the intention of providing a stable employment to
            the famous dabewallahs ensuring they get the correct reward for the amount of work they do.This delivery
            service also aims to work with various NGO's in helping them deliver food donated by individuals and
            restaurants to the needy to ensure no one goes to sleep hungry on an empty stomach. </p>
        </div>
      </div>
    </div>
  </div>
  <!--About-us ends-->

  <!--Login options start-->
  <div class="container-fluid p-1 servicepage" style="margin-top:100px;" id="our-service">
    <h1 class="text-center font-our-services text-dark mt-1">Our services</h1>
    <div class="container">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-6 p-3">
          <div class="card ml-n3" style="width: 25rem;margin-left: 114px;">
            <img src="card-1.png" class="card-img-top" height=290 alt="...">
            <div class="card-body">
              <h5 class="card-title">Tiffin customer</h5>
              <p class="card-text">People interested to try out our tiffin delivery can give their details here.</p>
              <a href="customer.php" class=" btn btn-card1">Sign up</a>
            </div>
          </div>
        </div>
        <div class="col-3 p-3">
          <div class="card" style="width: 25rem;margin-left: -95px;">
            <img src="card-2.jpg" class="card-img-top" height=290 alt="...">
            <div class="card-body">
              <h5 class="card-title">Dabewallah</h5>
              <p class="card-text">Dabewallahs interested in joining our organization can fill their details here.</p>
              <a href="tiffin_delivery_agent.php" class="btn btn-card2">Sign up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Login options end-->

  <!--Footer start-->
  <div class="container-fluid footer p-5 mt-4" id="contact-us">
  <a href="https://developers.google.com/profile/u/TheOnlySoham/dashboard"><img src="google_developer.png" class="google_developer" ></a>
    <a class="fa fa-linkedin-square linkedin" href="https://www.linkedin.com/in/soham-thodge-515676229/" style="font-size:36px;color:white"></a>
    <a href="https://github.com/kronos2003"><img src="github-mark-white.png" class="github"></a>
    <p class="text-center">&copy;Developed and designed by Soham Thodge</p>
    <p class="Endline">Made for achieving no poverty and hunger among the needy</p>
  </div>
  <!--Footer ends-->
</body>

</html>