<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <?php include "partials/connect.php" ?>
    <?php include "partials/header.php" ?>

    <h1 class="text-center text-primary mb-3">Welcome to Our Store</h1>
    <h1 class="text-center text-success mb-4">Shop by category</h1>

    <div class="container">
        <div class="row">
            <!-- php code -->
            <?php
            $sql = "select * from clothes";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // $row = mysqli_fetch_assoc($result);
                // echo "success";
                while ($row = mysqli_fetch_assoc($result)) {
                    $category_id = $row['category_id'];
                    $category_name = $row['category_name'];
                    $category_desc = $row['category_desc'];
                    $category_price = $row['category_price'];
                    $category_image = $row['category_img'];
                    echo '<div class="col-md-4 col-sm-6 col-xm-12 mb-4">
                                <div class="card">
                                    <img src=' . $category_image . ' class="card-img-top" alt="..." style="height: 300px;object-fit:contain">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $category_name . '</h5>
                                        <p class="card-text">' . substr($category_desc, 0, 59) . '....</p>
                                        <p>' . $category_price . '/-</p>
                            
                                        <a href="details.php?details_id=' . $category_id . '" class="btn btn-dark ">Continue Reading</a>
                                    </div>
                                </div>
    
                            </div>';
                }
            }







            ?>

        </div>
    </div>



</body>

</html>