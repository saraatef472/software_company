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

    $sql = "DELETE FROM `users`
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
