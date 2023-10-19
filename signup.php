
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Page</title>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@500&family=Lobster&family=Kaushan script:wght@200&family=Kaushan script:wght@100&family=Mulish:wght@200&family=Prompt:wght@400;600&family=Roboto:ital,wght@0,100;1,100&family=Satisfy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="sign.css">

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
<body> 
  <div class="contain">

  <?php
if(isset($_POST["submit"])){
  $username =$_POST["username"];
  $password =$_POST["password"];
  $passwordRepeat =$_POST["repeat_password"];
  $password_hash=password_hash($password,PASSWORD_DEFAULT);

  $errors=array();
  if(empty($username) OR empty($password) OR empty($passwordRepeat)){
    array_push($errors,"All fields are required");
  }
 
  if(strlen($password)<8)
  {
    array_push($errors,"Password must be at least 8 character long");

  }
  if($password!==$passwordRepeat){
   array_push($errors,"password didnot match");
  }
  require_once "databse.php";
 
  if(count($errors)>0){
    foreach($errors as $error){
      echo "<div class='alert danger'>$error</div>";
    }
  }
  else{
    //we will insert data into database

  
    $sql=  "INSERT INTO signup(username, password, repeat_password) VALUES (?,?,?)";
 
    $stmt=mysqli_stmt_init($conn);
    $prepareStmt=mysqli_stmt_prepare($stmt,$sql);
    if($prepareStmt){
       mysqli_stmt_bind_param($stmt,"sss",$username,$password_hash,$passwordRepeat);
       mysqli_stmt_execute($stmt);
       echo "<div class= 'alert alert-success'>You are registered succesfully.</div>";
    }else{
      die("Something went wrong");
    }
  }

}
?>

    <form action="signup.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
  
      <label for="username"><b>User name</b></label>
      <input type="text" placeholder="Enter username" name="username" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
  
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="text" placeholder="Repeat Password" name="repeat_password" required>
  
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
  
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  
      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" value="Register" name="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>

</body>
  </html>