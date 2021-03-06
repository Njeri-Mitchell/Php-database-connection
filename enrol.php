<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";

$conn = mysqli_connect($server,$username,$password,$database); 

if(isset($_POST['submitbutton']))
{
    $fullname = $_POST['fullname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];

    
    $insertData = mysqli_query($conn,"INSERT INTO 
    enrollment(fullname,phonenumber,email,gender,course)
    VALUES('$fullname','$phonenumber','$email','$gender','$course')");

if($insertData)
{
    echo "Data successfully submitted";
}
else{
    echo "Error Occurred".mysqli_error($conn);
}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">

</head>
<link rel="stylesheet" href="style.css">
<body>
      <nav class="navbar navbar-expand-lg bg-light fixed-top shadow "> 
       <div class="container-fluid">
        <a href="#" class="navbar-brand">Zalego Academy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <div class="navbar-nav">
                <a href="#" class="nav-link ">Home</a> 
                <a href="#" class="nav-link  ">About us</a>
                <a href="#" class="nav-link active btn btn-primary text-white ">Register Now</a>
            </div>
        </div>
     </div>
    </nav> 
    <div class="container">
      <main class="p-5 mb-2 text-black">
       <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
       <span><i class="fa fa-calendar-check-o fa-3x"></i></span>
       <span>20th July 2020</span>
       <br>
       <span><i class="fa fa-map-marker fa-3x"></i></span>
       <span>Zalego Academy <br>
         Devan Plaza
       </span>
    </main>
    </div>
    <div class="row">
      <h6>
        <p class="text-center">
          Looking for a place to kickstart your career in technology? <br>
           Whether you're local,new in town or just cruising through we've got <br>
           loads of great tips and events for you
        <p>
      </h6>
    </div>
   
      <br>
      <div class="container shadow p-3 mb-5 bg-body rounded">
        <form action="enrol.php" method="POST">
         <h2 class="text-center text-primary">Sign up today?</h2>
          <div class="row">
            <div class="mb-3 col-lg-6">
              <label for="fullname" class="form-label">Full name</label>
              <input type="text" name="fullname" class="form-control" placeholder="Enter your full name">
            </div>
            <div class="mb-3 col-lg-6">
              <label for="phonenumber" class="form-label">Phone number</label>
              <input type="tell"  name="phonenumber" class="form-control" placeholder="+2547....">
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-lg-6">
              <label for="email" class="form-label">Email</label>
              <input type="text"  name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="mb-3 col-lg-6">
            <label for="gender" name="gender" class="form-label">What's your gender?</label>
            <select class="form-select" name="gender">
              <option selected>--select your gender--<option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="nonbinary">Non-binary</option>
            <select>
          </div>
          </div>
         <br>
       <div class="row">
        <h6>
          <p>
            In order to complete your registration to the bootcamp,you are required to select one course you will be undertaking.Please NOTE that this will be your learning track during the 2-weeks immersion.
          </p>
        </h6>
       </div>
       <br>
       <div class="row">
        <div class="mb-3 col-lg-6">
          <label for="course" name="course" class="form-label">What's your preference course?</label>
            <select class="formselect" name="course">
              <option selected>--select your course--<option>
              <option value="webdesign">Web Design</option>
              <option value="webdesign">Data Science</option>
              <option value="webdesign">Cyber security</option>
            <select>
      </div>

      </div>
    
      <div class="row">
        <h6>
        <p>You agree by providing your information you understand our data privacy and security policy outlined in our terms and conditions and Privacy policy statement</p>
      </h6>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
        <p>Agree terms and conditions</p> 
        </label> 
      </div> 
     <button type="submit" name="submitbutton" class="btn btn-primary mb-3 col-lg-3">submit application</button>
      
    </div>
        </form>
      </div>
    <div class="text-center ">
      <p > Subscribe to get information,Latest news about <br>
       Zalego Academy
      </p>
      <label for="email">
       <input type="email" name="email" class="form-control" placeholder="Your email address"> 
       <button type="submit"class="btn btn-primary">subscribe</button>
      
      </label>
      
    
    </div>
   
 <hr>
      <footer>
      &copy;Company 2022
      </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0-beta1-dist\bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>

</body>
</html>