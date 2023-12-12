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

    // header('location: index.php');


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
  background-color: #f1f1f1;
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
  .all{
            margin:2%;
            padding:1%;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;
            width:42%;
            float:left;
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

}
@media screen and (max-width: 1000px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
  .all{
            margin:2%;
            padding:1%;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;
            width:42%;
            float:left;
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
<a href="admin.php"><i class="fa fa-dashboard" style="font-size:20px"> Dashboard</i></a>

  <a href="proj.php">Products</a>
  <a href="settings.php">settings</a>


  <a href="logout.php" class="nav-item nav-link">LOG Out</a>
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

<div class="nav-item dropdown">
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

<!-- <br> -->
<div class="alll">
<?php $result = mysqli_query($conn, "SELECT * FROM `products` WHERE category like '%software%'");
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {

        ?>
        <div class="all">
        <form action="../cart/cartdetails.php?id=<?php echo $row['id']; ?>" method="post">

<div class="card"id="card" >
<?php  echo ' <image class="card-img-top"  src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>'?>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name'];?></h5>
    <p class="card-text"><?php echo $row['description']?></p>
    <a href="details.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" name="details">Details</a>
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
<script src="../js/script.js">  </script>

</body>
</html>
