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
            margin:2%;
            padding:1%;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;
            width:20%;
            float:left;
        }

        .all:hover{
            box-shadow: 0 6px 17px rgb(0 0 0 / 0.9);
            /* padding:1%; */
        }

        .card{
            height:400px !important;
        }
        .card-img-top{
height:200px;
width:90%;
        }
      .all:hover .card-img-top{
width:100%
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
                        <a href="soft.php" class="dropdown-item">software</a>
                        <a href="hard.php" class="dropdown-item">Hardware</a>
                        <a href="filter.php" class="dropdown-item">Price</a>
                        <a href="marketing.php" class="dropdown-item">Marketing</a>
                        <a href="graphic.php" class="dropdown-item">Graphic Design</a>
                        <a href="interior.php" class="dropdown-item">Interior Design</a>
                        <a href="brand.php" class="dropdown-item">Offers</a>
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



<!-- <br> -->
<div class="alll">
<?php $result = mysqli_query($conn, "SELECT * FROM `products` WHERE STATUS = 'used'");
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {

        ?>
        <div class="all">
<form action="../cart/cartdetails.php?id=<?php echo $row['id']; ?>" method="post">

<div class="card"id="card" style="width: 18rem;">
<?php  echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>'?>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['brand'];?></h5>
    <p class="card-text"><?php echo $row['description']?></p>
    <a href="details.php?id=<?php echo $row['id'];?>" class="btn btn-primary" name="details">Details</a>
  </div>
</div>

    </form>
    </div>
    <?php }} ?>

    </div>

    <!-- </form> -->



    <script>
    $(document).ready(function()
{
    $("tr:even").css("background-color", "#ffeaa7");
});
    </script>


    </script>

</body>
</html>
