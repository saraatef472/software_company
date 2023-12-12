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

if(isset($_GET['id']) && isset($_POST['update'])){
    // $image = $_POST['image'];
    $file = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));
    $file2 = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));
    $file3 = addslashes(file_get_contents($_FILES["image3"]["tmp_name"]));
  //  $file4 = addslashes(file_get_contents($_FILES["image4"]["tmp_name"]));
  $category = $_POST['category'];
  $price = $_POST['price'];

  $description = $_POST['description'];
  $url= $_POST['url'];

    // $createdOn = $_POST['createOn'];
    $now = date("Y-m-d");
    $sql = "UPDATE `products` SET `category`='$category',`price`='$price',`name`='$name',`description`='$description',`url`='$url',`created_on`='$now',`image`='$file',`image3`='$file2',`image2`='$file3' WHERE id = $id
    ";
if($conn->query($sql) === TRUE ){
    echo "Updated successfully to products".$id;
    header("Location:admin.php");
}else{
    echo "error adding to products table" ;
}

}else{
    echo "invaild";
}

?>
