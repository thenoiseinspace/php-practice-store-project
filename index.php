<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website using PHP and MySQL</title>
    <!-- bootstrap css link -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--css file-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo3.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: 100</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome guest</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
    </li>
    </ul>

</nav>

<!--third child-->
<div class="bg-light">
    <h3 class="text-center">Flower Shop</h3>
    <p class="text-center"> Welcome to the Violet Flower Shop Online Store</p>
</div>

<!--fourth child-->
<div class="row">
    <div class="col-md-10"> 
        <!-- products -->
        <!--row one-->
        <div class="row">
            <div class="col-md-4 mb-2">
                <div class="card" style="width: 18rem;">
                 <img src="./images/calla.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div> 

            <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
                 <img src="./images/chrysanthemum-mauve.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div> 
           
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
                 <img src="./images/chrysanthemum-pink.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
        </div>
    </div>


<!--row two-->

<div class="row">
            <div class="col-md-4 mb-2">
                <div class="card" style="width: 18rem;">
                 <img src="./images/calla.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div> 

            <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
                 <img src="./images/chrysanthemum-mauve.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div> 
           
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
                 <img src="./images/chrysanthemum-pink.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
        </div>


    <div class="col-md-2"> 
        <!-- sidenav -->
    </div>
</div> 



<!--last child - footer-->
<div class="bg-info p-3 text-center">
    <p>All rights reserved 2022</p>

</div>
</div> 


<!-- <h1>Hello intro to ecomm site</h1> -->

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>