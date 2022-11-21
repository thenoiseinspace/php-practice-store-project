<!-- http://localhost/php-practice-store-project/index.php -->
<!-- linking connection file -->
<?php
include("includes/connect.php");
?>


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
<div class="row px-3">
    <div class="col-md-10"> 
        <!-- products -->
        <!--row one-->
        <div class="row">
<!-- fetching products -->
        <?php
            $select_query="Select * from `products`";
            $result_query=mysqli_query($con, $select_query);
            // $row=mysqli_fetch_assoc($result_query);
            // echo $row['product_title'];
            while($row=mysqli_fetch_assoc($result_query)){
               $product_id=$row['product_id'];
               $product_title=$row['product_title'];
               $product_description=$row['product_description'];
            //    $product_keywords=$row['product_keywords'];
               $product_image1=$row['product_image1'];
               $product_price=$row['product_price'];
               $category_id=$row['category_id'];
               $brand_id=$row['brand_id'];
               echo "<div class='col-md-4 mb-2'>
               <div class='card' style='width: 18rem;'>
                <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                   <div class='card-body'>
                       <h5 class='card-title'>$product_title</h5>
                       <p class='card-text'>$product_description</p>
                   <a href='#' class='btn btn-primary'>Add to cart</a>
                   <a href='#' class='btn btn-primary'>View more</a>
                   </div>
               </div>
           </div> "; 
            }
        ?>
            <!-- <div class="col-md-4 mb-2">
                <div class="card" style="width: 18rem;">
                 <img src="./images/calla.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    <a href="#" class="btn btn-primary">View more</a>
                    </div>
                </div>
            </div>  -->
        <!-- row end -->
        </div>

            <!-- <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
                 <img src="./images/chrysanthemum-mauve.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    <a href="#" class="btn btn-primary">View more</a>
                    </div>
                </div>
            </div>  -->
           
            <!-- <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
                 <img src="./images/chrysanthemum-pink.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    <a href="#" class="btn btn-primary">View more</a>
                    </div>
                </div>         
            </div>  -->
    <!-- column end -->
    </div>


<!--row two-->

<!-- <div class="row">
            <div class="col-md-4 mb-2">
                <div class="card" style="width: 18rem;">
                 <img src="./images/calla.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    <a href="#" class="btn btn-primary">View more</a>
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
                    <a href="#" class="btn btn-primary">View more</a>
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
                    <a href="#" class="btn btn-primary">View more</a>
                    </div>
                </div>      
        </div>
</div>
</div> -->

    <div class="col-md-2 bg-secondary p-0"> 
        <!-- sidenav -->
        <!-- flower types aka brands to be displayed-->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Flower types aka Delivery Brands</h4></a>
            </li>
<?php
$select_brands= "Select * from `brands`";
$result_brands=mysqli_query($con, $select_brands);
// $row_data=mysqli_fetch_assoc($result_brands); 
// echo $row_data['brand_title'];
  // to display the brand name in the url instead of the number, change brand_id in the href on line below 'echo' to brand_title
while($row_data=mysqli_fetch_assoc($result_brands)){
    $brand_title=$row_data['brand_title'];
    $brand_id=$row_data['brand_id'];
    echo " <li class='nav-item'>
    <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
</li>" ;
}

?>
<!-- 
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Lily</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Chrysanthemum</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Dahlia</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Lavender</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Orchid</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Peony</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Rose</a>
            </li>
            <li class="nav-itemo">
                <a href="#" class="nav-link text-light">Succulent</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Wisteria</a>
            </li> -->
        
        </ul>

        <!-- flower colors -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Flower colors aka categories</h4></a>
            </li>

            <?php
$select_categories= "Select * from `categories`";
$result_categories=mysqli_query($con, $select_categories);
// $row_data=mysqli_fetch_assoc($result_brands); 
// echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_categories)){
    $category_title=$row_data['category_title'];
    $category_id=$row_data['category_id'];
    echo " <li class='nav-item'>
    <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
</li>" ;
}

?>
            <!-- <li class="nav-item">
                <a href="#" class="nav-link text-light">Blue/purple</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Burgundy</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Cream/white</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Green</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light">Pink/red</a>
            </li> -->
        
        </ul>
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