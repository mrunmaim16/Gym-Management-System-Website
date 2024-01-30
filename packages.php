
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
            <li ><a href="index.php">Home</a></li>
            
           <li class="active" id="a"> <a href="packages.php">Membership Details</a></li>
            <li><a href="facilities.php">Amenities </a></li>
           
             <li><a href="about.php">About Us</a></li>
              
            <li><a href="contact.php">Contact Details</a></li>
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
 
 </form>
          '; ?>

        </div>
      </div>
    </div>
   </div>

    
    <div class="jumbotron">
    <table> <tr>
                <td align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="right" valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0">
                      <tr></tr>
                      <tr>
                        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="left" valign="top" class="gray12_txt"><table width="100%" border="0" cellpadding="1" cellspacing="1">
                              <tr>
                                <td colspan="4" align="left" valign="top"><p><strong>MAVERICK ACTIVITY CENTRE - Packages</strong></p></td>
                                </tr>
                              <tr>
                                <td width="25%" align="left" valign="top"><strong>Duration&nbsp; </strong></td>
                                <td width="25%" align="center" valign="top"><strong>General</strong></td>
                                <td width="25%" align="center" valign="top"><strong>Couple  </strong></td>
                                </tr>
                              <tr>
                                <td width="522"><strong>Monthly&nbsp; </strong></td>
                                <td align="center" valign="top">$50 </td>
                                <td align="center" valign="top">$75 </td>
                                </tr>
                              <tr>
                                <td width="522"><strong>Quarterly&nbsp; </strong></td>
                                <td align="center" valign="top">$125</td>
                                <td align="center" valign="top">$200</td>
                                </tr>
                              <tr>
                                <td width="522"><strong>Half-Yearly</strong></td>
                                <td align="center" valign="top">$230</td>
                                <td align="center" valign="top">$360</td>
                                </tr>
                              <tr>
                                <td width="522"><strong>Yearly</strong></td>
                                <td align="center" valign="top">$420</td>
                                <td align="center" valign="top">$700</td>
                                </tr>
                              </table></td>
                            </tr>
                          </table
     
       <p><h5><b>MAVERICK ACTIVITY CENTRE</b> boasts a highly skilled team of trainers who are widely regarded as some of the best in the business and take great delight in helping members whenever they need it. Naturally, they are all insured to provide some of the most cutting-edge instruction and are fully accredited on the Exercise Professionals Register. They are able to keep your goals front and center while actively assisting you in achieving them.</h5><br> <h3>Note:</h3>
» 	All Rates are in USD.<br>
» 	General Rates are applicable for Per Person Bases.<br>
   
    </div>


 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
