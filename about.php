
<?php
include_once 'include/db_connect.php';
include_once 'include/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>MAVERICK ACTIVITY CENTRE</title>
    

    <!-- Bootstrap core CSS -->
    <link href="boot/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="boot/css/main.css" rel="stylesheet">
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" text="text/css" rel="stylesheet">

  </head>

  <body>
    <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 

</div>


    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">MAVERICK ACTIVITY CENTRE</a>
        </div>
            <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
             <li><a href="index.php">Home</a></li>
              <li><a href="packages.php">Membership Details </a></li>
              <li  class="active" id="a"><a href="#">Amenities</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact Details </a></li>
             <?php
            if(isset($_SESSION['username'])) {
              echo '<li><a href="./profile/">Profile</a>
              <li><a href="./workouts">Workouts</a>';
              if(isset($_SESSION['admin'])) {
                echo '<li><a href="att.php">Attendance</a>';
              }
            }
            ?>
          </ul>
        
   
        
   <?php
    if(isset($_SESSION['username']))
 {
 echo '<form class="navbar-form navbar-right" role="form" action="include/logout.php">
           
             
           
            <input type="submit" class="btn btn-success" value="Sign-out">';
}
 else echo '
        
 <form class="navbar-form navbar-right" role="form" method="post" action="include/process_login.php">
  <div class="form-group">
     <input type="text" placeholder="Enter registered Email" class="form-control" name="email">
   </div>
   <div class="form-group">
     <input type="password" placeholder="Enter Password" class="form-control" name="password">
   </div>
   <input type="submit" class="btn btn-success" value="Sign in" onclick="formhash(this.form, this.form.password);">
   
 </form>
          '; ?>

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    <h2>About Us</h2>
    
    
    <h3><center>“Health is a state of complete physical, mental and social well-being and not merely the absence of disease or infirmity.”</center></h3>
    
    
    <h2>Our Objectives</h2>

<p><h4>Maverick Activity Centre has something for everyone.  We provide recreational and leisure opportunities for students, faculty and staff through several areas: Informal Recreation, Intramural Sports, Fitness & Wellness, Sport Clubs, Adaptive Recreation, Aquatics and Spirit Groups.</h4></p>

<p><h4>The Fitness & Wellness program offers a variety of ways to stay fit and get healthy! Check out a Group Exercise class, team with a Personal Trainer, learn about nutrition or treat yourself to a relaxing and therapeutic massage.</h4></p>

<h3>Facilities</h3>
<p><h4>
» 	Cardio Center<br>
» 	Strength Training<br>
» 	Free Weight Area<br>
» 	Aerobics<br>
» 	Group Fitness<br>
» 	Food For Thought<br>
» 	Massage Therapy<br>
» 	Locker Room<br>
   </h4></p>  </div>


 <div class="container">
  
      </div>


      <hr>

    </div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="boot/js/bootstrap.min.js"></script>
    <SCRIPT TYPE="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></SCRIPT>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 <SCRIPT src="boot/js/dialog.js" type="text/javascript"></SCRIPT>
<script type="text/JavaScript" src="boot/js/sha512.js"></script> 
        <script type="text/JavaScript" src="boot/js/forms.js"></script> 
      
    </script>
  </body>
</html>
