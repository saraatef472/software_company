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

// include('../layout/slidebar.php');
// if(!empty($_SESSION['id'])){
//     $id = $_SESSION['id'];
//     $result = mysqli_query($conn, "SELECT * FROM products WHERE id =$id");
//     $row = mysqli_fetch_array($result);
//     // header("location:index.php");
// }else{
//     header("Location:../register/login.php");
// }


$sql ="SELECT * FROM `products`WHERE 1";
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

    </style>
</head>
<body>
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><img src="img/al.jpeg"style="width:41%;height:70px">Gouniasoft</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="products.php" class="nav-item nav-link">Admin Panel</a>

                    <a href="proj.php" class="nav-item nav-link">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Filter By</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="used.php" class="dropdown-item">used</a>
                            <a href="new.php" class="dropdown-item">New</a>
                            <a href="filter.php" class="dropdown-item">price</a>
                            <a href="manual.php" class="dropdown-item">Accessories</a>
                            <a href="auto.php" class="dropdown-item">Mobiles</a>
                            <a href="brand.php" class="dropdown-item">Brand</a>

                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">contact us</a>
                    <a href="settings.php" class="nav-item nav-link">Settings</a>

                    <a href="logout.php" class="nav-item nav-link">LOG Out</a>


                </div>
                <form class="form-inline my-2 my-lg-0" action="search.php" method="post">

                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button></form>
            </div>
        </nav>
        <!-- Navbar End -->



    <h2><a href="settings.php">Settings</a></h2>

<!-- add new category form -->
<form action="addprod.php?id=<?= $data['id']?>" method="POST" enctype="multipart/form-data">
<div class="new" >
   <h2>Add New product</h2>
   <input type="text" name="brand" value="brand" placeholder="brand">
   <input type="number" name="price" value="price" placeholder="price">
   <input type="number" name="pricedel" value="pricedel" placeholder="delivery price">
   <input type="number" name="pricemain" value="pricemain" placeholder="maintance price">
   <input type="text" name="description" value="description" placeholder="description">
   <input type="text" name="color" value="color" placeholder="color">
   <input type="text" name="type" value="type" placeholder="type">
   <input type="text" name="status" value="status" placeholder="status">

   <input type="file" id="image1" name="image1" value="image1" placeholder="image">
   <input type="file" id="image2" name="image2" value="image2" placeholder="image">
   <input type="file" id="image3" name="image3" value="image3" placeholder="image">
   <!-- <input type="file" id="image4" name="image4" value="image4" placeholder="image"> -->


   <input type="submit" name ="add" value="submit" class="submit">

</div>
</form>
<!-- <form action="addimage.php" method="post" enctype="multipart/form-data">
   <input type="submit" value="save" name="insert" id="insert">
   </form> -->
<div class="new">
<form action="deleteall.php" method="post">
<input id="submit" type="submit" name="deleteall" value="Delete All" class="submit">  </form>
</div>
<br><br>
<div class="crud">

<?php $result = mysqli_query($conn, "SELECT * FROM `products`"); ?>

            <div class="head">
            <h2>Products:</h2>


        </div>
<table class="table">
<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">brand</th>
      <th scope="col">price</th>
      <th scope="col">price with delivery</th>
      <th scope="col">price with maintance</th>

      <th scope="col">color</th>
      <th scope="col">description</th>
      <th scope="col">type</th>
      <th scope="col">status</th>
      <th scope="col">image</th>
      <th scope="col">image3</th>
      <th scope="col">image2</th>
      <th scope="col">image4</th>


    </tr>
  </thead>
    <tbody
>

    <?php
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $row['id']; ?></td>

            <td><?php echo $row['brand']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['price_with_delivery']; ?></td>
            <td><?php echo $row['price_with_maintance']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['status']; ?></td>

            <td>
           <?php  echo ' <image style = "width:90px;" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>'?>
            </td>
            <td>
           <?php  echo ' <image style = "width:90px;" src="data:image/jpeg;base64,' . base64_encode($row['image3']) . '"/>'?>
            </td>
            <td>
           <?php  echo ' <image style = "width:90px;" src="data:image/jpeg;base64,' . base64_encode($row['image2']) . '"/>'?>
            </td>



            <td>
<div class="btn-group"><a href="editprod.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary" name="edit" >Edit</a></div>
            </td>

            <td>
<div class="btn-group"><a href="deleteprod.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" name="delete" >delete</a></div>
            </td>

        </tr>





        </tbody>
    <?php }} ?>

    </table>
    <!-- </form> -->



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
    </script>
<!-- <script src="../js/script.js">


    </script> -->

</body>
</html>
