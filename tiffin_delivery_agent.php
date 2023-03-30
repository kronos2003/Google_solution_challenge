<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Dabewallah Login</title>
  <link rel="stylesheet" href="Dabewallah.css">
</head>

<body>
  <div class="container tiffindelivery_card">
    <form action="insert_tiffin_delivery_agent.php" method="post">
      <form>
        <div class="container">
          <div class="row">
            <div class="col-5">

            </div>
            <div class="col-7 Logtitle">
              <p>Dabewallah</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-1">
            </div>
            <div class="col-9">
              <!--email starts-->
              <div class="form-check mt-5">
                <p>
                  <label for="exampleInputEmail1">Email address</label><br>
                  <input class="Email" name="Email" type="email" class="form-control mt-2" id="exampleInputEmail1"
                    placeholder="Enter your email address">
                  <small id="emailHelp" class="form-text text-muted mt-2">Your first step to connect with us!</small>
                </p>
              </div>
              <!--email ends-->

              <!--name start-->
              <div class="form-check mt-5">
                <p>
                  <label for="LogName">Your Name</label><br>
                  <input class="Name" name="Name" type="text" class="form-control mt-2" id="LogName"
                    placeholder="Enter your name">
                </p>
              </div>
              <!--name ends-->

              <!--password start-->
              <div class="form-check mt-5">
                <p>
                  <label for="exampleInputPassword1">Password</label><br>
                  <input class="pwd" name="Password" type="password" class="form-control mt-2"
                    id="exampleInputPassword1" placeholder="Enter your Password">
                </p>
              </div>
              <!--password ends-->

              <!--address start-->
              <div class="form-check mt-5">
                <label for="Address">Enter your address</label><br>
                <p>
                  <input class="address" name="Address" type="address" class="form-control mt-2" id="Adress"
                    placeholder="Enter your address">
                  <small id="address" class="form-text text-muted mt-2">Please mention your address to optimize order
                    assignment</small>
                <p>
              </div>
              <!--address ends-->

              <!--contact number start-->
              <div class="form-check mt-5">
                <p>
                  <label for="Contactnumber">Contact number</label><br>
                  <input class="connumber" name="Phone_number" type="number" class="form-control mt-2"
                    id="Contactnumber" placeholder="Enter your phone number">
                </p>
              </div>
              <!--contact number ends-->
              <div class="form-check mt-5">
                <p>
                  <input class="Remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </p>
              </div>
              <div>
                <a class="login-redirect" href="login.php">Already registered? Login</a>
              </div>
              <button class="Login" type="submit" class="btn btn-primary">Sign up</button>
            </div>
          </div>
        </div>
        <div class="col-2">
        </div>
      </form>
    </form>
  </div>
</body>

</html>