<?php
require_once('connect.php');

if (isset($_POST['add'])) {

    $file = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));
    $file2 = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));
    $file3 = addslashes(file_get_contents($_FILES["image3"]["tmp_name"]));

    $category = $_POST['category'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $url= $_POST['url'];
//     $creadedOn = $_POST['createOn'];
    $now = date("Y/m/d");
        //  mysqli_query($conn, "INSERT INTO users (name, email,createdOn) VALUES ('$name', '$email')");
        $sql = "INSERT INTO `products`(`category`, `category_id`, `name`, `price`, `description`, `image`, `image3`, `image2`, `created_on`, `url`) VALUES ('$category','','$name','$price','$description','$file','$file3','$file2','$now','$url')";



 if($conn->query($sql) === TRUE ){
        echo "added successfully to products table";
        // $query = "INSERT INTO `products`(`image`) VALUES ('$file')";
        // if(mysqli_query($conn,$query)){
        //     echo "<script> alert('inserted image successfully') </script>";
        // }else{
        //     echo "error";
        // }

        header("Location:admin.php");
 }else{

        echo "error adding to products table .$sql";

 }
}else{
    echo "no submitted ";
}
?>

