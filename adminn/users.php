<?php
include('connect.php');
if(!empty($_SESSION['userID'])){
    $id = $_SESSION['userID'];
    $sql = "SELECT * FROM users WHERE userID = $id AND groupid = 0";
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

// include('../layout/slidebar.php');
// if(!empty($_SESSION['id'])){
//     $id = $_SESSION['id'];
//     $result = mysqli_query($conn, "SELECT * FROM products WHERE id =$id");
//     $row = mysqli_fetch_array($result);
//     // header("location:index.php");
// }else{
//     header("Location:../register/login.php");
// }


$sql ="SELECT * FROM `users`WHERE 1";
$results = mysqli_query($conn,$sql);

$data = $results->fetch_assoc();

// $update = false;
// if (isset($_POST['submit'])) {
//     // $filename = $_FILES["image"]["name"];
//     // $tempname = $_FILES["image"]["tmp_name"];
//     // $folder = "./image/" . $filename;
//     $name = $_POST['name'];
//     $image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : '/images/noimage.jpg';
//     $description = $_POST['description'];
//     $price = $_POST['price'];
//     $category = $_POST['category'];
//     $image = $_POST['image'];
//     $createdOn = $_POST['createdOn'];
//     mysqli_query($conn, "INSERT INTO `products`(`name`, `description`, `price`, `category`, `image`, `createOn`) VALUES (`$name`, `$description`, `$price`, `$category`, `'$image'`, `$now`)");
//     // header('location: index.php');
// }
// $sql = "SELECT * FROM products, cat WHERE cat.id = $id ";
// $data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gouina</title>
    <meta charset="utf-8">
    <title>gouniasoft cars</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

 <!-- Google Web Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
body {
    /* background-color: #ffeaa7; */
    /* color: #fff; */
    font-family: system-ui;
}

.new{
    width: 60%;
    margin: auto;
}

h2{
    text-align: center;
    text-transform: uppercase;
    margin: 30px 0px;
}

input {
    width: 80%;
    height: 30px;
    outline: none;
    border: none;
    background: #bdc3c7;
    margin: 4px 0;
    border-radius: 4px;
    padding: 4px;
    color: #fff;

}
.submit{
    background: #2c3e50;
}
.submit:hover{
    background-color: #3498db;
}
.crud {
    width: 95%;
    margin: auto;
}
#total{
    color:grey
}
#total::before {
    content: 'total:';
}

input:focus {
outline: none;
/* background-color: #222; */
border:1px grey;
width:90%;
background-color:#7f8c8d;

}

table {
    width: 100%;
    text-align: center;
    margin: 10px 0;
    border-radius: 102px solid grey;
    box-shadow:5px  10px 10px #222;
    border-collapse: collapse;
    padding: 25%;
    padding-top: 20%;
    text-align: left;
    margin-bottom: 4%;
}

table th {
    text-transform: uppercase;

}
thead{
    border:1px grey;
    box-shadow: 2px 1px grey;
}

h2{
text-shadow: 2px 1px grey;
}

@media only screen and (max-width: 600px) {
  table{
    width: 100%;
    text-align: center;
    margin: 10px 0;
    border-radius: 102px solid grey;
    box-shadow:5px  10px 10px #222;
    border-collapse: collapse;
    /* padding: 25%; */
    padding-top: 2%;
    text-align: left;
    margin-bottom: 4%;
  }
}
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

    </style>
</head>
<body>

<div class="sidebar">
<a href="index.php">
<h2 class="m-0 text-primary" style="margin-bottom:30px"><img src="img/al.jpeg"style="width:99%;height:70px;">Gouniasoft</h2>
</a><br>
<form class="form-inline my-2 my-lg-0"style="display:flex" action="search.php" method="post">
<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button></form>
<a href="admin.php"><i class="fa fa-dashboard" style="font-size:20px"> Dashboard</i></a>

  <a href="proj.php">Products</a>
  <a href="settings.php">settings</a>

  <a href="users.php" class="nav-item nav-link">users</a>
  <a href="logout.php" class="nav-item nav-link">LOG Out</a>
  <div class="nav-item dropdown" style="width:100%">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Filter By</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="soft.php" class="dropdown-item">software</a>
                        <a href="hard.php" class="dropdown-item">Hardware</a>
                        <a href="filter.php" class="dropdown-item">Price</a>
                        <a href="marketing.php" class="dropdown-item">Marketing</a>
                        <a href="graphic.php" class="dropdown-item">Graphic Design</a>
                        <a href="interior.php" class="dropdown-item">Interior Design</a>
                        <a href="brand.php" class="dropdown-item">Offers</a>
                    </div>
                </div>

<div class="nav-item dropdown" style="width:100%">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Branches</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="egypt.php" class="dropdown-item">Egypt</a>
                        <a href="emirates.php" class="dropdown-item">Emirates</a>
                        <a href="turkey.php" class="dropdown-item">Turkey</a>
                        <a href="london.php" class="dropdown-item">London</a>
                        <a href="greece.php" class="dropdown-item">Greece</a>
                    </div>
                </div>

</div>


<div class="content">


        <br><br>
<div class="crud">

<?php $result = mysqli_query($conn, "SELECT * FROM `users`"); ?>

            <div class="head">
            <h2>Users:</h2>
<h2> note: people with group id  (3) are the employees and those with group id (1) are users</h2>

        </div>
<table class="table">
<thead>
    <tr>
      <th scope="col">username</th>

      <th scope="col">first name</th>
      <th scope="col">last name</th>
      <th scope="col">group_id</th>

      <th scope="col">created on</th>


    </tr>
  </thead>
    <tbody
>

    <?php
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>

            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['firstName']; ?></td>
            <td><?php echo $row['lastName']; ?></td>
            <td><?php echo $row['groupid']; ?></td>
            <td><?php echo $row['createdOn']; ?></td>


            <td>
            <div class="btn-group"><a href="makeadmin.php?id=<?php echo $row['userID']; ?>&username=<?php echo $row['username'];?>&firstName=<?php echo $row['firstName'];?>&lastName=<?php echo $row['lastName'];?>" class="btn btn-danger" name="admin" >Make Him Admin</a></div>

            </td>

            <td>
            <div class="btn-group"><a href="makeuser.php?id=<?php echo $row['userID']; ?>&username=<?php echo $row['username'];?>&firstName=<?php echo $row['firstName'];?>&lastName=<?php echo $row['lastName'];?>" class="btn btn-danger" name="admin" >make Him User</a></div>
            </td>

            <td>
<div class="btn-group"><a href="deleteuser.php?id=<?php echo $row['userID']; ?>&username=<?php echo $row['username'];?>&firstName=<?php echo $row['firstName'];?>&lastName=<?php echo $row['lastName'];?>" class="btn btn-danger" name="admin" >Delete</a></div>
            </td>

        </tr>





        </tbody>
    <?php }} ?>

    </table>
    <!-- </form> -->

</div>



</div>






    <!-- <h2><a href="settings.php">Settings</a></h2>

<div class="new">
<form action="deleteall.php" method="post">
<input id="submit" type="submit" name="deleteall" value="Delete All" class="submit">  </form>
</div> -->

    <script>
//image jquery
// $(document).ready(function()
// {
// $('#submit').click(function (){
// var img = $('#image').val();

// if(img == ""){
//     alert('please select image');
//     return false;
// }else{
//     var extension = $('#image').val().split('.').pop().toLowerCase();
// if(jQuery.inArray(extension,['jpg', 'gif','png','jpeg','jfif']) == -1){
//     alert("invalid extension");
//     $('#image').val('');
//     return false;
// }



// }



// });

// });

let title = document.getElementById('title');
let price = document.getElementById('price2');
let totprice = document.getElementById('price');
let taxes = document.getElementById('taxes');
let ads = document.getElementById('ads');
let total = document.getElementById('total');
let discount = document.getElementById('discount');
let count = document.getElementById('count');
let submit = document.getElementById('submit');

// let deletee = document.getElementById('submit2');

//get total
function gettotal() {
    if (price.value != "") {
        let result = (+price.value + +taxes.value + +ads.value) - +discount.value;
        total.innerHTML = result;
        totprice.value = result;
        total.style.backgroundColor = "blue";
    } else {
        total.innerHTML = "";
        total.style.backgroundColor = "rgb(165, 14, 3)";
    }
}

        //table
    $(document).ready(function()
{
    $("tr:even").css("background-color", "#ffeaa7");
});
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>
<!-- <script src="../js/script.js">


    </script> -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>
