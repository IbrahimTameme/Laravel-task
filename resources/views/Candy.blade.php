@extends('master.master')
@section('home')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('Card.css')}}">

    <title>@section('title','Candy')</title>

<style>


        @import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
        nav
        {
            height:65px;
          
        }
.navbar-icon-top .navbar-nav .nav-link > .fa {
  position: relative;
  width: 36px;
  font-size: 24px;
}

.navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
  font-size: 0.75rem;
  position: absolute;
  right: 0;
  font-family: sans-serif;
}

.navbar-icon-top .navbar-nav .nav-link > .fa {
  top: 3px;
  line-height: 12px;
}

.navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
  top: -10px;
}

@media (min-width: 576px) {
  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

@media (min-width: 768px) {
  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

@media (min-width: 992px) {
  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

@media (min-width: 1200px) {
  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
    text-align: center;
    display: table-cell;
    height: 70px;
    vertical-align: middle;
    padding-top: 0;
    padding-bottom: 0;
  }

  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
    display: block;
    width: 48px;
    margin: 2px auto 4px auto;
    top: 0;
    line-height: 24px;
  }

  .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
    top: -7px;
  }
}

        /* Footer
        {
            position:absolute;
            bottom:0;
            width:100%;
        } */
        /* card */
        
        img
        {
            height:300px;
            width:400px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-warning">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fa fa-home"></i>
          Home
          <span class="sr-only">(current)</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-envelope-o">
            <span class="badge badge-danger">11</span>
          </i>
          Link
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">
          <i class="fa fa-envelope-o">
            <span class="badge badge-warning">11</span>
          </i>
          Disabled
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-envelope-o">
            <span class="badge badge-primary">11</span>
          </i>
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-bell">
            <span class="badge badge-info">11</span>
          </i>
          Test
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-globe">
            <span class="badge badge-success">11</span>
          </i>
          Test
        </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    
    
<div class="container" style="margin-top:50px;">
        <div class=" d-flex flex-row justify-content-around">
            <!-- <div class="col-md-3"> -->
                <div class="card-sl p-2 bd-highlight m-2">
                    <div class="card-image">
                        <img
                            src="https://www.benjerry.com/files/live/sites/systemsite/files/flavors/products/us/pint/ice-cream-sammie-detail.png" />
                    </div>

                    <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                    <div class="card-heading">
                        Ben&Jerry's
                    </div>
                    <div class="card-text">
                    Ben&Jerry's Ice Cream Sammie.
                    </div>
                    <div class="card-text">
                        $15
                    </div>
                    <a href="#" class="card-button"> Purchase</a>
                </div>

                
                <div class="card-sl p-2 bd-highlight m-2">
                    <div class="card-image ">
                        <img
                            src="https://m.media-amazon.com/images/I/61QnqE4DOCL._SX522_.jpg" />
                    </div>

                    <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                    <div class="card-heading">
                        Magnum Almond
                    </div>
                    <div class="card-text">
                    Magnum Almond is full of Almonds.
                    </div>
                    <div class="card-text">
                        $5
                    </div>
                    <a href="#" class="card-button"> Purchase</a>
                </div>
                <div class="card-sl p-2 bd-highlight m-2">
                    <div class="card-image ">
                        <img
                            src="https://assets.sainsburys-groceries.co.uk/gol/3372050/1/640x640.jpg" />
                    </div>

                    <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                    <div class="card-heading">
                        Flake 99
                    </div>
                    <div class="card-text">
                        Flake 99 4 icecream.
                    </div>
                    <div class="card-text">
                        $12
                    </div>
                    <a href="#" class="card-button"> Purchase</a>
                </div>

            </div>

            <div class=" d-flex flex-row justify-content-around">
            <!-- <div class="col-md-3"> -->
                <div class="card-sl p-2 bd-highlight m-2">
                    <div class="card-image">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBVeQ5Uj9g0Yo_hbcO9K9IR8UEz0vmANewJw&usqp=CAU"  />
                    </div>

                    <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                    <div class="card-heading">
                       Caramilk
                    </div>
                    <div class="card-text">
                    Caramilk is ice cream.
                    </div>
                    <div class="card-text">
                        $15
                    </div>
                    <a href="#" class="card-button"> Purchase</a>
                </div>

                
                <div class="card-sl p-2 bd-highlight m-2">
                    <div class="card-image ">
                        <img
                            src="data:image/jpeg;base64,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" />
                    </div>

                    <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                    <div class="card-heading">
                        Audi Q8
                    </div>
                    <div class="card-text">
                        Audi Q8 is a full-size luxury cro
                    </div>
                    <div class="card-text">
                        $67,400
                    </div>
                    <a href="#" class="card-button"> Purchase</a>
                </div>
                <div class="card-sl p-2 bd-highlight m-2">
                    <div class="card-image ">
                        <img
                            src="https://www.luluhypermarket.com/cdn-cgi/image/f=auto/medias/1222423-01.jpg-1200Wx1200H?context=bWFzdGVyfGltYWdlc3wxMDE5MTl8aW1hZ2UvanBlZ3xoNjMvaGRmLzExNzYyNDUwNTMwMzM0LzEyMjI0MjMtMDEuanBnXzEyMDBXeDEyMDBIfDY4ZWRhMzlhMGE0MmI2ZTFmZjkwM2ZmMWU0YzdhNjdkYWE4NWRkODI2MmZkNDBkNWZiYTdhYTgwODVhMzExMTc" />
                    </div>

                    <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                    <div class="card-heading">
                        Audi Q8
                    </div>
                    <div class="card-text">
                        Audi Q8 is a full-size luxury cross
                    </div>
                    <div class="card-text">
                        $67,400
                    </div>
                    <a href="#" class="card-button"> Purchase</a>
                </div>

            </div>
        </div>  
       
        <footer class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
@endsection



    
</body>
</html>