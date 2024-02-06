<?php
$conn = new mysqli("localhost", "root", "", "ecommerce");
if (!$conn) {

    die("unsuccessful" . mysqli_error($conn));
}
