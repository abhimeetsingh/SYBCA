<!doctype html>
<html lang="en">

<head>
  <link rel="icon" type="image/x-icon" href="logo/logo.ico">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Model for free</title>
</head>

<body>

  <!--jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

  <!-- Nav bar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="logo/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
      Alpha Creative
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" data-toggle="modal" data-target="#modalContactForm">Contact Us</a>
        </li>
      </ul>
    </div>
    <form class="form-inline my-2 my-lg-0 mr-1">
      <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginAvatar">Login</a>
      <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalsignup">Sign Up</a>
    </form>
  </nav>

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/a.jpg" class="img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/b.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/c.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
  <!-- Login -->

  <!--Modal: Login with Avatar Form-->
  <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
      <!--Content-->
      <div class="modal-content">

        <!--Header-->
        <div class="modal-header fle d-flex justify-content-center ">
          <img src="images/img.jpg" width="250px"  alt="avatar" class="rounded-circle img-responsive shadow p-3 mb-5 bg-white rounded">
        </div>
        <!--Body-->
        <div class="modal-body text-center mb-1">

          <h5 class="mt-1 mb-2">Hello User</h5>

          <div class="md-form ml-0 mr-0">
            <input type="password" type="text" id="user_id" class="form-control form-control-sm validate ml-0">
            <label data-error="wrong" data-success="right" for="form29" class="ml-0">Enter Username</label>
            <input type="password" type="text" id="pass" class="form-control form-control-sm validate ml-0">
            <label data-error="wrong" data-success="right" for="form29" class="ml-0">Enter password</label>
          </div>

          <div class="text-center mt-4">
            <button class="btn btn-cyan btn-success mt-1">Login <i class="fas fa-sign-in ml-1"></i></button>
          </div>
        </div>

      </div>
      <!--/.Content-->
    </div>
  </div>

  <!--Sign up form-->

  <div class="modal fade" id="modalsignup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Body-->
        <div class="modal-body text-center mb-1">

          <h5 class="mt-1 mb-2">Sign Up Form</h5>

          <div class="md-form ml-0 mr-0">
            <input type="password" type="text" id="username" class="form-control form-control-sm validate ml-0">
            <label data-error="wrong" data-success="right" for="form29" class="ml-0">Enter User Name</label>
            <input type="password" type="email" id="email" class="form-control form-control-sm validate ml-0">
            <label data-error="wrong" data-success="right" for="form29" class="ml-0">Enter email id</label>
            <input type="password" type="text" id="password" class="form-control form-control-sm validate ml-0">
            <label data-error="wrong" data-success="right" for="form29" class="ml-0">Enter password</label>
          </div>

          <div class="text-center mt-4">
            <button class="btn btn-cyan btn-primary mt-1">Register<i class="fas fa-sign-in ml-1"></i></button>
          </div>
        </div>

      </div>
      <!--/.Content-->
    </div>
  </div>




  <!-- Contact Us -->

  <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="form34" class="form-control validate">
            <label data-error="wrong" data-success="right" for="form34">Your name</label>
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="form29" class="form-control validate">
            <label data-error="wrong" data-success="right" for="form29">Your email</label>
          </div>

          <div class="md-form mb-5">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="form32" class="form-control validate">
            <label data-error="wrong" data-success="right" for="form32">Subject</label>
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
            <label data-error="wrong" data-success="right" for="form8">Your message</label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
        </div>
      </div>
    </div>
  </div>



</body>

</html>