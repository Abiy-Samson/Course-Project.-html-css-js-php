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
    <title>Home-Page</title>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@500&family=Lobster&family=Kaushan script:wght@200&family=Kaushan script:wght@100&family=Mulish:wght@200&family=Prompt:wght@400;600&family=Roboto:ital,wght@0,100;1,100&family=Satisfy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styl.css">
    <script src="script.js" defer></script>
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
    <section class="top-section">
        <div class=" top-section-div">
           <div class="slogan"> <h1>Be the Best that you can be</h1></div>
            <div class="introduction">
            <p>Learning at your own pace</p>
            <p>Our interactive courses and resources help you achieve your goals</p>
            <a href="#">Enroll Now
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" className="w-2 h-2">
                    <path fillRule="evenodd" d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z" clipRule="evenodd" />
                  </svg>
                </a>
           
            </div> 
        </div>
        <div class="ab">
        <img src="/project 1/images/1.png" alt="Doesn't exists">
    </div>
    </section>
   </main>

   <section class="section--2 common-property-section" id="section--2">
        
    <div id="section--2-information">
        <ol>
            <li><img src="/project 1/images/4.png" alt=""></li>
            <li>
                <h1 class="slogan last-section-slogan">Have You Decided to Enroll yet?</h1>
                <p  class="introduction-slogan">start your free trial as soon as possible</p>
            </li>
        </ol>
        <footer id="footer-section">
            <div>
             <h1><i></i>/ABSA <i></i></h1>
            <p>Lorem ipsum is simply dummy text of the printing and ty
            pesetting industry. lorem IPsum has been the industry's 
            standard dummy text ever since the 1500s</p> 
            <p class="copy-right">&#169 ABSA 2023 All Rights Reserved</p>   
            </div>
           <div>
            <table>
                <tr>
                <th>Company</th>
                <th>Resource</th>
                <th>Product</th>    
                </tr>
                <tr>
                  <td>About Us </td>   
                  <td>Blog</td>      
                  <td> Pricing</td>         
                </tr>
                <tr>
                    <td>Career</td>   
                    <td>Help Center</td>      
                    <td>Enterprise</td>         
                  </tr>
                  <tr>
                    <td>Press Kit</td>   
                    <td>Uk Research Guide</td>      
                    <td>Integrate</td>         
                  </tr>
            </table>
           </div>
        </footer>
    </div>
</section>
</body>
</html>