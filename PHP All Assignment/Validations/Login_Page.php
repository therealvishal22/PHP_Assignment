<?php
    session_start();

    if (isset($_COOKIE['user'])) {
       
        $un=$_COOKIE['user'];
    }
    else
    {
        $un="";
    }
    if (isset($_COOKIE['pass'])) {
       
        $ps=$_COOKIE['pass'];
    }
    else
    {
        $ps="";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style type="text/css">
  *{font-size:20px;}
  body 
  {
      background-color: wheat;
      background-size: cover;
  }
  a 
  {
    color: green;
  }
  a:hover 
  {
    color: skyblue;
    text-decoration: none;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
    font-size: 10px;
  }
</style>

</head>


<body style="background-color:aquawhite;" >
<center>
    <h3 >Student Login</h3>

        <h2>Login Here</h2>
        <form action="checklogin.php" method="POST">
        <i class="fa fa-user" aria-hidden="true"></i>
        Username 
        <br>
        <input type="email" placeholder="Enter USerName" name="email"value= "<?php echo $un; ?>" required>
        <br>
        <br>
        <i class="fa fa-key" aria-hidden="true"></i>
        Password
        <br>
        <input type="password" name="password" placeholder="Password" value="<?php echo $ps; ?>" required >
        <br> 
        <br>    
        <button type="submit" name="btn_sb">Login</button>
        <center><h1><a href="jsform.php">New Regitration</a></h1> </center>
        </form>
        <?php 
        if (isset($_POST['msg'])) {
    
      $msg=$_POST['msg'];
      ?>
        <h3 style="color:red;text-align: center;"><?php echo "<script>alert('$msg')</script>"; ?></h3>
        <?php
        }
        else{
          $msg="";
        } 
        ?>

    </div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</center>
</body>
</html>