<?php
session_start();
if(isset($SESSION["signup"])){
    header("Location :ab.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page</title>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@500&family=Lobster&family=Kaushan script:wght@200&family=Kaushan script:wght@100&family=Mulish:wght@200&family=Prompt:wght@400;600&family=Roboto:ital,wght@0,100;1,100&family=Satisfy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="login.css">
    <script  src="script.js" defer></script>
</head>
<body>
    <header id="main-header">
        <h1 id="logo"><SMALL><</SMALL>/ANGB<SMALL>></SMALL></h1>
        <ul id="header-list">
            <li id="list">
                <a href="ab.php">Home</a>
                <a href="blog.html">Blog</a>
                <a href="course.html">Courses</a>
                <a href="about.html">About</a>
            </li>
            <li id="list">
                <a href="login.php">Log-In</a>
                <div id="signup">
                <a href="signup.php" >Signup</a>
                </div>
            </li>
        </ul>
    </header>
<main>


    <form action="login.php" method="post">
   <?php
     if(isset($_POST["login"]))
      {
        $username=$_POST["username"];
        $password=$_POST["password"];
        require_once "database.php";
        $sql= "SELECT *FROM signup WHERE username='$username'";
        $result=mysqli_query($conn,$sql);
        $signup=mysqli_fetch_array($result,MYSLI_ASSOC);
        if($signup){
            if(password_verify($password, $signup["password"]))
            {
                session_start();
                $_SESSION["signup"]="yes";

              header("Location :ab.php");
              die();
            }
            else{
                echo "<div class='alert alert-danger'>Password doesnt match</div>";
            }
            
        }else{
            echo "<div class='alert alert-danger'>username doesnt match</div>";
        }
      }
   ?>
   <div class="contain" >
    <div class="container">
        
      <h1>Login</h1>
      <p>Please Log-in Here!!</p>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
  
      <button type="submit" value="Login" class="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <button type="button" class="cancelbtn">Cancel</button>
         
    </div>

  </form>

</main>
</body>
</html>