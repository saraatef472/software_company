<?php
require('connect.php');
// if(!empty($_SESSION['userID']) && !empty($_SESSION['groupid'])){
//     $id = $_SESSION['userID'];
//     $gb=$_SESSION['groupid']
// ;    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");  // $row = mysqli_fetch_array($result);
//    header("location:index.php");
//    //echo $id.$gb;
// }else{
//     echo "no";
// }

//check if user coming from Http request post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedpass = sha1($password);
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    // $_SESSION['id'] = $row['id'];
    if ($_POST['submit']) {
        if (mysqli_num_rows($result) > 0) {

            if ($hashedpass == $row['password']) {
              $_SESSION['userID'] = $row['userID'];
                $_SESSION['username'] = $row['username'];
                if ($row['groupid'] == 0) {
                    header("location:../adminn/index.php");
                    // echo "admin";
                } else if ($row['groupid'] == 1) {
                    header("location:../user/index.php");
                  //  echo "user";
                } else if ($row['groupid'] == 3) {
                  header("location:../employ/index.php");
                   echo"employyy";
                }
            } else {
              echo '<script language="javascript">';
              echo 'alert("wrong Password")';
              echo '</script>';
            }

        } else {
            echo "user is not registered";

        }

    }
}
//if count > 0 means there is a user with this username $pass
// if($count > 0){
// $_SESSION['username'] = $username; //set username to the session
//     header('location:home.php'); // redirect to home page
//     exit();

// }
// }

?>

<!-- <form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <h3 class="h333">Login</h3>
<input type="text" class="form-control" name="user" placeholder="User Name" autocomplete="off">
<input type="password" class="form-control" name="pass"  placeholder="Password" autocomplete="new-password">
<input  class="btn btn-primary btn-block "id="sub" type="submit" name="submit" value="Submit">
<br>
<h3>New user: <a class="a"href="register.php">sign up</a></h3>
</form> -->

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
        .all{

  margin-left: 40%;
  margin-top:5%;
  width: 30%;
  height: 200px;
  border-radius: 2px solid grey;

}
.login{

  font-size: 35px;

}
label,.form-check{
    color:#0d6efd;
    font-size: 35px;
}
p {
  /* Center horizontally*/
 /* // text-align: center; */
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

<div class="all">
<form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="user" placeholder="User Name" autocomplete="off">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass"  placeholder="Password" autocomplete="new-password">
  </div>

  <button type="submit" class="btn btn-primary" id="sub" type="submit" name="submit" value="Submit">Submit</button>
</form>
<div class="form-group form-check">
  <label >New user?</label>
  <a class="a"href="../adminn/register.php">sign up</a>
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
