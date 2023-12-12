<?php
require_once('connect.php');
// if(!empty($_SESSION['userID'])){
//     $id = $_SESSION['userID'];
//     $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
//     // $row = mysqli_fetch_array($result);
//     // header("location:index.php");
// }else{
//     header("Location:index.php");
// }

if(isset($_GET['id']) &&isset($_GET['username']) && isset($_GET['firstName'])&& isset($_GET['firstName'])){

    $id = $_GET['id'];
    $username = $_GET['username'];
    $fname = $_GET['firstName'];
    $lname = $_GET['lastName'];
  //  $password = $_POST['password'];
//    $hashedPass = sha1($password);
    $now = date("Y-m-d");
    // $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

    // $createdOn = $_POST['createOn'];
    $now = date("Y-m-d");
    $sql = "UPDATE `users` SET
    `username`='$username',
    `firstName`='$fname',
    `lastName`='$lname',
    `groupid`='1',
    `createdOn`='$now'
    WHERE `userID`= '$id'
    ";

    if($conn->query($sql) === TRUE ){
       // echo "Updated successfully to products datab";
        header("Location:../adminn/users.php");
 }else{
        echo "error adding to products table".$sql;
 }

}else{
    echo "invaild";
}

?>
