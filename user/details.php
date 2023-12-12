<?php
include('connect.php');
// $name = "";
// $description= "";
// $price = "";
// $image = "";
// $category = "";
// $id = 0;
// $update = false;
// if(!empty($_SESSION['id'])){
//     $id = $_SESSION['id'];
//     $result = mysqli_query($conn, "SELECT * FROM products WHERE id =$id");
//     $row = mysqli_fetch_array($result);
//     // header("location:index.php");
// }else{
//     header("Location:login.php");
// }
$now = date("Y-m-d");

if (isset($_POST['submit'])) {

    // $filename = $_FILES["image"]["name"];
    // $tempname = $_FILES["image"]["tmp_name"];
    // $folder = "./image/" . $filename;

    $brand = $_POST['brand'];
    $image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : '/images/noimage.jpg';
    $price = $_POST['price'];
    $color = $_POST['color'];
    $image = $_POST['image'];
    $type = $_POST['type'];
    $status= $_POST['status'];
    $year= $_POST['year'];
    $description= $_POST['description'];




    mysqli_query($conn, "INSERT INTO `products`(`brand`, `price`, `color`, `type`, `status`, `years`,`description`,`image`) VALUES ('$brand','$price','$color','$type','$status','$year','$description','$file')");

    // header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
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
       * {
    box-sizing: border-box;
}

        .head{
            width:30%;
            background-color: lightgray;
            margin-left:35%;
            text-align: center;
            color:grey;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);

        }
        .all{
            margin:5%;
            padding:1%;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;
            width:80%;
            float:left;
        }

        .all:hover{
            box-shadow: 0 6px 17px rgb(0 0 0 / 0.9);
            /* padding:1%; */
        }


.images>img{
height:300px;
width:28%;
margin:2%
}

        .card{
            height:800px !important;
        }
        .card-img-top{
height:200px;
width:90%;
        }
        /* #totalprice2{
            display:none;
        } */
      .all:hover .card-img-top{
width:30%;
margin:2%
        }
        .price2 , .pricedel{
            visibility: hidden;
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
  .images > img{
    height:150px;
    width: 30%;
    margin-left: 2%;
  }
  .images:hover > img{
    height:150px;
    width: 30%;
    margin-left: 2%;
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
  .images > img{
    height:150px;
    width: 30%;
    margin-left: 2%;
  }
  .images:hover > img{
    height:150px;
    width: 30%;
    margin-left: 2%;
  }
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
  .all{
            margin:2%;
            padding:1%;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;
            width:90%;
            float:left;
        }
        .images > img{
    height:150px;
    width: 30%;
    margin-left: 2%;
  }
  .images:hover > img{
    height:150px;
    width: 30%;
    margin-left: 2%;
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
<h2 class="m-0 text-primary" style="margin-bottom:30px"><img src="img/al.jpeg"style="width:99%;height:70px;">Gouniasoft</h2>
<br>
<form class="form-inline my-2 my-lg-0"style="display:flex" action="search.php" method="post">
<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button></form>

  <a  href="proj.php">Products</a>

  <a href="settings.php">settings</a>


  <a href="contact.html" class="nav-item nav-link">contact us</a>
  <a href="logout.php" class="nav-item nav-link">LOG Out</a>
  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Filter By </button>
  <div id="myDropdown" class="dropdown-content">
      <a href="soft.php" class="dropdown-item">software</a>
                        <a href="hard.php" class="dropdown-item">Hardware</a>
                        <a href="filter.php" class="dropdown-item">Price</a>
                        <a href="marketing.php" class="dropdown-item">Marketing</a>
                        <a href="graphic.php" class="dropdown-item">Graphic Design</a>
                        <a href="interior.php" class="dropdown-item">Interior Design</a>
                        <a href="brand.php" class="dropdown-item">Offers</a>
  </div>
</div>
</div>


<div class="content">
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
                <a href="proj.php" class="nav-item nav-link">projects</a>
                <div class="nav-item dropdown">
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
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <a href="../adminn/index2.php" class="nav-item nav-link">login</a>
            </div>
            <form class="form-inline my-2 my-lg-0" action="search.php" method="post">

<input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit"  name="submit">Search</button></form>
</div>
    </nav>
    <!-- Navbar End -->

<!-- <br> -->
<div class="alll" >
<?php
 $id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $id");
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {

        ?>
        <div class="all">
<form action="../cart/cartdetails.php?id=<?php echo $row['id']; ?>" method="post">

<div class="card"id="card" style="width:100%">
<div class="images" style="display:flex">

<?php if($row['image']  != ""):echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>';endif; ?>


<?php if($row['image2']  != ""):echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image2']) . '"/>';endif; ?>



<?php if($row['image3']  != ""):echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image3']) . '"/>';endif; ?>

</div>
<div class="card-body">
   <h2 class="card-title">Category :<?php echo $row['category'];?></h2>
    <p class="card-text"> <h5>DESC:</h5>&nbsp;&nbsp;<?php echo $row['description']?></p>
 <h5> name:</h5>   <p class="card-text price" id="name"><?php echo $row['name']?></p>
 <h5> price:</h5>   <p class="card-text price" id="price"><?php echo $row['price']?></p>

    <a href="proj.php"  class="btn btn-primary" name="details">BACK</a>



    <a href="<?php echo $row['url']?>"  class="btn btn-primary" name="details">More Details</a>



  </div>
</div>

    </form>
    </div>
    <?php }} ?>

    </div>

    <!-- </form> -->


</div>
    <script>
    $(document).ready(function()
{
    $("tr:even").css("background-color", "#ffeaa7");
});


function maintance(){

  var x =document.getElementById("price");
  var z =document.getElementById("price2");
  var y =document.getElementById("totalprice2");
  var m =document.getElementById("main")
  let float = parseFloat(x.innerHTML);
  let float2 = parseFloat(z.innerHTML);
  w = float + float2;
  if (y.innerHTML != w){
    y.innerHTML = w;
    m.setAttribute("value", "price without maintance");
   }else{
    y.innerHTML = float;
    m.setAttribute("value", "price with maintance only");

   }

 }

function delivery(){
var x =document.getElementById("price");
var z =document.getElementById("pricedel");
var y =document.getElementById("totalprice2");
var m =document.getElementById("delivery")
let float = parseFloat(x.innerHTML);
let float2 = parseFloat(z.innerHTML);
w = float + float2;
if (y.innerHTML != w){
  y.innerHTML = w;
  m.setAttribute("value", "price without Delivery");
}else{
  y.innerHTML = float;
  m.setAttribute("value", "price with delivery only");

 }

}

function maindel(){
var x =document.getElementById("price");
var xx =document.getElementById("price2");
var z =document.getElementById("pricedel");
var y =document.getElementById("totalprice2");
var m =document.getElementById("mad")
let float = parseFloat(x.innerHTML);
let float2 = parseFloat(z.innerHTML);
let float3 = parseFloat(xx.innerHTML);

w = float + float2 +float3;
if (y.innerHTML != w){
  y.innerHTML = w;
  m.setAttribute("value", "price without maintance & delivery");
}else{
  y.innerHTML = float;
  m.setAttribute("value", "price with maintance & delivery");

 }

}
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

</body>
</html>
