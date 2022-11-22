<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){

    $product_title=$_POST['product_title'];
    $description=$_POST['product_description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brand=$_POST['product_brand'];
    $product_price=$_POST['product_price'];
    $product_status='true'; 

    //accessing images
    $product_image1=$_FILES['product_image1']['name'];
    // $product_title=$_POST['product_title'];

    //accessing image temp name
    $tmp_image1=$_FILES['product_image1']['tmp_name'];

    //checking empty condition
    if($product_title=='' or  $description=='' or $product_keywords=='' or $product_category=='' or $product_brand=='' or $product_price=='' or $product_image1=='' or  $tmp_image1=='' ){
        echo "<script>alert('Please fill out all fields.') </script>";
        exit();
    } else{
        // I added the file extension to this line
        move_uploaded_file($tmp_image1, './product_images/$product_image1.jpg');

        //insert query
        $insert_products="insert into `products` (product_title, product_description, product_keywords, category_id, brand_id, product_image1, product_price, date, status) values ('$product_title', '$description',  '$product_keywords', '$product_category', '$product_brand', '$product_image1', '$product_price', NOW(), '$product_status')"; 
        $result_query=mysqli_query($con, $insert_products); 
        if($result_query){
            echo "<script>alert('Successfully inserted products') </script>";  
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>

    <!-- boostrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- font awesome link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- css file -->
    <link rel="stylesheet" href="../style.css">

</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data"> 
            
        <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Insert product title" autocomplete="off" required="required">
            </div>

        <!-- description -->
        <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Insert product description" autocomplete="off" required="required">
            </div>

        <!-- keywords -->
        <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Insert product keywords" autocomplete="off" required="required">
            </div>

        <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_category" id="" class="form_select">
                <option value="">Select a category</option>
                <?php 
                    $select_query="Select * from `categories`"; 
                    $result_query=mysqli_query ($con, $select_query); 
                    while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                    }

                ?>
                <!-- <option value="">Category1</option> -->
               </select>
            </div>

        <!-- brands -->
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_brand" id="" class="form_select">
                <option value="">Select a brand</option>
                <?php 
                    $select_query="Select * from `brands`"; 
                    $result_query=mysqli_query ($con, $select_query); 
                    while($row=mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }

                ?>
               </select>
            </div>


        <!-- image 1 -->
        <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"  required="required">
        </div>

        <!-- price -->
        <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Insert product price" autocomplete="off" required="required">
        </div>

        <!--submit -->
        <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert product">
        </div>

        </form>
    </div>
</body>
</html>