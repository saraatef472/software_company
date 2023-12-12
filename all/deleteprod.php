<?php
require_once('connect.php');
if(!empty($_SESSION['userID'])){
    $id = $_SESSION['userID'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    // $row = mysqli_fetch_array($result);
    // header("location:index.php");
}else{
    header("Location:../index.php");
}
//start
if (isset($_GET['id'])) {
$id = $_GET['id'];
    $sql = "DELETE FROM `products` WHERE  `id`='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "deleted successfully from datab";
        header("Location:admin.php");
    } else {
        echo "error deleting from products table";
    }
}else{
    echo "error all";
}
