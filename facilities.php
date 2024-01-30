
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
    <link href="boot/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="boot/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
    
      
    
   
  </head>

  <body>

 <?php
        if (isset($_GET['error'])) {
            echo '<p class="error"></p>';
        }
        if(isset($_GET['reg'])) {
          echo '<p class="reg"></p>';
        }
        ?> 


    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MAVERICK ACTIVITY CENTRE</a>
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
     <input type="text" placeholder="Enter registered email" class="form-control" name="email">
   </div>
   <div class="form-group">
     <input type="password" placeholder="Enter Password" class="form-control" name="password">
   </div>
   <input type="submit" class="btn btn-success" value="Sign in" onclick="formhash(this.form, this.form.password);">
 
 </form>'
           ?>

        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <!--too add vids
          <li>
    <iframe src="http://player.vimeo.com/video/17914974" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </li>
       -->
  

    <div class="container">
<table>
<tr><td><h4>Cardio Center</h4>
Cardiovascular exercise is exercise that gets your heart rate up. Though some people use it solely for weight loss, cardio has other benefits as well. There are a wide variety of cardiovascular exercises, but consistency, duration, and intensity are the most important factors for meeting your fitness goals. There are three types of training styles: high-intensity interval training (HIIT), moderate-intensity steady state (MISS) and low-intensity steady state (LISS)</td>
<td><br><br><img src="img/cardio.png", height = 250, width= 500 ></td></tr></table>

<br>
<table><tr><td colspan=2>  <img src="img/strength.png", height = 250, width= 500><br></td><td valign=top>&nbsp;&nbsp;&nbsp;<h4>Strength Training</h4> 
Strength training (also known as resistance training) is a type of exercise that causes your muscles to contract against an outside resistance.
The outside resistance can be from your body weight, weight machines, medicine balls, resistance bands or dumbbells.<br>
BENEFITS OF STRENGTH TRAINING:<br>
Increased muscle mass: Helps to maintain muscle strength and function and improve general physical function
Stronger bones: Helps reduce the risk of bone fractures
Joint flexibility: Can reduce symptoms of stiffness and arthritis
Enhances overall quality of life by giving you the ability to do more
Weight control: Can help to manage your weight
Helps to control your blood sugar.</td></tr></table>

<<table><tr><td><h4>Aerobics</h4>
 Aerobic exercise refers to the type of repetitive, structured physical activity that requires the body’s metabolic system to use oxygen to produce energy. Aerobic exercise:
Improves the capacity of the cardiovascular system to uptake and transport oxygen.
Can be undertaken in many different forms, with the common feature that it is achieved at a heart rate of 70–80% of a person’s age-appropriate maximum.
Considered the cornerstone of endurance training, characterized by moderate energy expenditure over a prolonged period of time.
Is any activity that uses large muscle groups, can be maintained continuously and is rhythmic in nature.</td>
<td><img src="img/aerobics.png", height = 250, width= 500></td></tr></table> 


<table><tr><td colspan=2>  <img src="img/group.jpeg", height = 250, width= 500><br></td><td valign=top>&nbsp;&nbsp;&nbsp;<h4>Strength Training</h4> 
With a variety of class options including Yoga, Zumba, Cycling, Kickboxing, Strength and more UTA Group Fitness has the perfect class to meet your schedule and style! Our motivating instructors will provide challenging exercises, intensity and modification options to help all participants reach individual fitness goals. Purchase your pass today.</td></tr></table>
      <hr>

      <table><tr><td><h4>Nutrition Services</h4>
      One-on-one nutrition counseling with a registered, licensed dietitian is available for the following:<br>
Weight management<br>
Weight/fat loss<br>
Weight/muscle gain<br>
Sports nutrition<br>
Medical nutrition therapy<br>
Skin nutrition<br>
Eating disorders/disordered eating<br>
Wellness/preventive nutrition<br>
Basic nutrition education<br> 
</td>
<td><img src="img/nutrition.jpeg", height = 250, width= 500></td></tr></table> 


      <table><tr><td colspan=2>  <img src="img/lockerroom.jpeg", height = 250, width= 500><br></td><td valign=top>&nbsp;&nbsp;&nbsp;<h4>Locker Rooms</h4> 
      The locker room at the gym is a place meant for refreshing yourself after a workout, but it's a social setting just the same. And in every social setting, there are unspoken (or sometimes, spoken/written) rules of conduct.<hr>
      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/JavaScript" src="boot/js/sha512.js"></script> 
        <script type="text/JavaScript" src="boot/js/forms.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="boot/js/bootstrap.min.js"></script>
    <SCRIPT TYPE="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></SCRIPT>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 <SCRIPT src="boot/js/dialog.js" type="text/javascript"></SCRIPT>
 <script src="boot/js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="boot/js/slide.js"></script>
  <script src="boot/js/plugins/jquery.fitvids.js"></script>


  </body>
</html>
