<?php
include('connect.php');
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
// $name = "";
// $description= "";
// $update = false;
$now = date("Y-m-d");
if(!isset($_GET['id'])){
    die("itsont provided");
}
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = '$id'";
$result = $conn->query($sql);
if($result->num_rows != 1){
    die("its not id in database");
}
$data = $result->fetch_assoc();
// print_r($data);

// if (isset($_POST['edit'])) {
//     $name = $_POST['name'];
//     $description = $_POST['description'];
//     $createdOn = $_POST['createdOn'];
//     // $id = $row['id'];

//     mysqli_query($conn, "INSERT INTO `cat`(`name`, `description`, `createOn`) VALUES ('$name', '$description','$now')");
//     $_SESSION['message'] = "saved";
//     // header('location: index.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gouina</title>
    <style>
body {
    /* background-color: #222; */
    /* color: #fff; */
    font-family: system-ui;
}

.new{
    width: 80%;
    margin: auto;
}

h2{
    text-align: center;
    text-transform: uppercase;
    margin: 30px 0px;
}

input {
    width: 90%;
    height: 30px;
    outline: none;
    border: none;
    background: #ccc;
    margin: 4px 0;
    border-radius: 4px;
    padding: 4px;
    /* color: black; */

}
.submit{
    background: #222;
}
.crud {
    width: 80%;
    margin: auto;
}

input:focus {
outline: none;
background-color: #222;
color:wheat;

}

table {
    width: 100%;
    text-align: center;
    margin: 10px 0;
    border-radius: 102px solid grey;
    box-shadow: 2px 10px #222;
    border-collapse: collapse;
    padding: 25px;
    padding-top: 400x;
    text-align: left;
}

table th {
    text-transform: uppercase;
}
.allof{
    padding:3%;
    width:50%;
    margin-left:25%
}

    </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<!-- add new category form -->
<div class="allof">
<form action="updateprod.php?id=<?= $data['id']?>" method="POST" enctype="multipart/form-data">
<div class="new" >
   <h2>Add New product</h2>
   <input type="text" name="category" value="<?php echo $data['category']?>" placeholder="category">
   <input type="number" name="price" value="<?php echo $data['price']?>" placeholder="price">
   <input type="text" name="description" value="<?php echo $data['description']?>" placeholder="description">
   <input type="text" name="url" value="<?php echo $data['url']?>" placeholder="url">
   <input type="file" id="image1" name="image1" value="image1" placeholder="image">
   <input type="file" id="image2" name="image2" value="image2" placeholder="image">
   <input type="file" id="image3" name="image3" value="image3" placeholder="image">
   <input type="submit" name ="update" value="submit" class="submit">

</div>
</form>

</div>
</body>
</html>
