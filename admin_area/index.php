<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- boostrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- font awesome link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">

</head>
<body>
    <!-- navbar -->
   <div class="container-fluid p-0">
    <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo3.png" alt="" class="logo">
                <nav class="navbaar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a> 
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child -->
        <div class="bg-light">
                <h3 class="text-center p-2">Manage Details</h3>
        </div>


    <!-- third child row of admin buttons -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                    <a href="#"><img src="../images/calla.jpg" alt="" class="admin_image"> </a> 
                    <p class="text-l text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button><a href="#" class="nav-link text-light bg-info p-1">Insert Products</a></button>
                    <button><a href="#" class="nav-link text-light bg-info p-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info p-1">Insert Categories</a></button>
                    <button><a href="#" class="nav-link text-light bg-info p-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info p-1">Insert Brands</a></button>
                    <button><a href="#" class="nav-link text-light bg-info p-1">View Brands</a></button>
                    <button><a href="#" class="nav-link text-light bg-info p-1">All Orders</a></button>
                    <button><a href="#" class="nav-link text-light bg-info p-1">All Payments</a></button>
                    <button><a href="#" class="nav-link text-light bg-info p-1">List Users</a></button>
                    <button><a href="#" class="nav-link text-light bg-info p-1">Logout</a></button>
                </div>
            </div> 

        </div>


 <!--fourth child-->
<div class="container my-5">
    <?php 
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['insert_brand'])){
            include('insert_brands.php');
        }
   ?> 
</div> 



        <!--last child - footer-->
<div class="bg-info p-3 text-center">
    <p>All rights reserved 2022</p>

</div>
   </div>


<!-- boostrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>