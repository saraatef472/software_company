<?php
require_once('connect.php');
if(!empty($_SESSION['userID'])){
    $id = $_SESSION['userID'];
    $sql = "SELECT * FROM users WHERE userID = $id AND groupid = 3";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {
     // echo "yes";
        }}else{
            header("Location:../index.php");
        }
    // $row = mysqli_fetch_array($result);
   //  header("location:index.php");
   // echo $id ."SELECT * FROM users WHERE userID = $id AND groupid = 0";

}else{
    header("Location:../index.php");
    // echo $id ."SELECT * FROM users WHERE userID = $id AND groupid = 0"."WRONG LOCATION";
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
