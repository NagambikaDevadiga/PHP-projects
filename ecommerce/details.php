<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <?php include "partials/connect.php" ?>
    <?php include "partials/header.php" ?>

    <?php
    $id = $_GET['details_id'];
    $sql = "select * from clothes where category_id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $category_id = $row['category_id'];
    $category_id = $row['category_id'];
    $category_name = $row['category_name'];
    $category_desc = $row['category_desc'];
    $category_price = $row['category_price'];
    $category_image = $row['category_img'];
    // echo $category_name;


    ?>
</body>
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4 text-center"><?php echo $category_name ?></h1>
        <p class="lead"><?php echo $category_desc ?></p>
        <hr class="my-4">
        <button class="btn btn-dark"><a class="btn btn-dark " href="index.php" role="button">Shopping</a>
        </button>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-sm-12">
            <img src=<?php echo $category_image ?> class="image-fluid" alt="" style="width:300px;height:300px">
        </div>
        <div class="col-lg-6 col-sm-12">
            <h2 class="text-center text-danger"><?php echo $category_name ?></h2>
            <p><?php echo $category_desc ?></p>
            <p><?php echo $category_price  ?>/-</p>
            <button class="btn-success">Add to cart</button>
        </div>
    </div>
</div>

</html>