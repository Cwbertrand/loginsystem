<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CW Bertrand">
    <link rel="shortcut icon" href="./photos/favicon.png">
    <meta name="description" content="my first ever portfolio">
    <meta name="keywords" content="portfolio,html,css, bootstrap">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="/sytlesheet.css">

    <title>Personal portfolio by CwBertrand</title>
</head>
<body class="hero text-white">


    <!--================== =================NAV BAR ==========================================-->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top py-sm-4">
        <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-white"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto ">
            <a class="nav-link active" href="../index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">Services</a>
            <a class="nav-link" href="#">Portfolio</a>
            <a class="nav-link" href="#">Services</a>
            <a class="nav-link" href="#">Testimonials</a>
            <a class="nav-link" href="#">Contact</a>
            <a class="nav-link" href="../signIn/signin.php">Sign In</a>
          </div>
        </div>
      </nav>
  
    </div>

 <!--================== ================= SIGN UP FORM ==========================================-->



    <form class=" d-flex justify-content-center align-items-center flex-column" action="/includes/signup.inc.php" method="post">
        <h1 class="py-5">Sign Up Form</h1>
        <div class="form-group w-25">
          <label for="formGroupExampleInput">First Name</label>
          <input type="text" class="form-control " id="formGroupExampleInput" name="firstname" placeholder="first name">
        </div>
        <div class="form-group w-25">
          <label for="formGroupExampleInput2">Name</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" name="secondname" placeholder="full name">
        </div>
        <div class="form-group w-25">
          <label for="formGroupExampleInput">Email</label>
          <input type="email" class="form-control " id="formGroupExampleInput" name="email" placeholder="email addresse">
        </div>
        <div class="form-group w-25">
          <label for="formGroupExampleInput2">Password</label>
          <input type="password" class="form-control" id="formGroupExampleInput2" name="userpaswd" placeholder="password">
        </div>
        <div class="form-group w-25">
          <label for="formGroupExampleInput2">Confirm password</label>
          <input type="password" class="form-control" id="formGroupExampleInput2" name="pwdrepeat" placeholder="confirm password">
        </div>
        <div class="text-center ">
            <button class="btn btn-warning text-white" type="submit" name="submit">SIGN UP</button>
          </div>
      </form>

<?php


include_once '../footer.php';

?>