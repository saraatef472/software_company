<?php
require 'connect.php';
if(!empty($_SESSION['userID'])){
    $id = $_SESSION['userID'];
    $sql = "SELECT * FROM users WHERE userID = $id AND groupid = 3";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows>0){
        while ($row = mysqli_fetch_array($result)) {
      header("Location:index.php");
        }}else{
          header("Location:../index.php");
        //   echo"$id";
        }
    // $row = mysqli_fetch_array($result);
   //  header("location:index.php");
   // echo $id ."SELECT * FROM users WHERE userID = $id AND groupid = 0";

}

// if(isset($_SESSION['username'])){
//     header('location:home.php'); // redirect to home page
// }
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $userName= $_POST['user'];
    $password = $_POST['pass'];
    $confirmpassword = $_POST['confirmpassword'];
    $hashed_password =sha1($password);

        $now = date("Y-m-d");
    $sql = "SELECT * FROM users WHERE username = '$userName'";
        $dublicate = mysqli_query($conn,$sql);
        if (mysqli_num_rows($dublicate) > 0) {
            echo "<script>alert('email or user name is already exists');</script>";
        }else{
    if($password == $confirmpassword){
        $query = "INSERT INTO `users`(`username`, `password`, `firstName`, `lastName`, `groupid`,`createdOn`) VALUES ('$userName','$hashed_password','$fname','$lname','1','$now')";
                mysqli_query($conn, $query);
                // echo "registration successful".$query;
                header("location:../user/index.php");
            }else{
                echo "password doesnot match";
            }

        }

        }

?>

<!-- <form class="login" action="#" method="POST">
    <h4>USER Login</h4>
    <div class="names" style="display:flex">
<input type="text" class="form-control" name="fname" placeholder="First Name" autocomplete="off">
<input type="text" class="form-control" name="lname" placeholder="Last Name" autocomplete="off">
</div>
<input type="email" class="form-control" name="user" placeholder="User Name" autocomplete="off">
<input type="password" class="form-control" name="pass"  placeholder="Password" autocomplete="new-password">
<input type="password" placeholder="Repeat Password" name="confirmpassword" id="confirmpassword" required>

<input  class="btn btn-primary btn-block" type="submit" name="submit" value="Submit">
</form> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>gouniasoft</title>
    <style>
        .all{

  margin-left: 40%;
  margin-top:5%;
  width: 30%;
  height: 200px;
  border-radius: 2px solid grey;

}
.text-muted{
    color:red;
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


<div class="all">
<form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="user" placeholder="User Name" autocomplete="off" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label >First Name:</label>
    <input type="text" class="form-control" name="fname" placeholder="First Name" autocomplete="off"  required>
    <!-- //<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label >Last Name:</label>
    <input type="text" class="form-control" name="lname" placeholder="Last Name" autocomplete="off"  required>
    <!-- //<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass"  placeholder="Password" autocomplete="new-password"  required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password:</label>
    <input type="password" class="form-control"placeholder="Repeat Password" name="confirmpassword" id="confirmpassword" required>
  </div>


  <button type="submit" class="btn btn-primary" id="sub"type="submit" name="submit" value="Submit">Submit</button>
</form>
<div class="form-group form-check">
  <label >Have an account?</label>
  <a class="a"href="../adminn/index2.php">Login</a>
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
