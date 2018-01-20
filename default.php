<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 

error_reporting(E_ERROR | E_PARSE);

 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	  <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
	<title>BIBoard</title>

    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    <!--

       Kleur veranderen kan via data-color="blue | azure | green | orange | red | purple"
        data-image geeft een sidebar-image!

    -->

    	<div class="sidebar-wrapper">
            
            </div>

            
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="default.php">BI Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                    </ul>
					
                    <ul class="nav navbar-nav navbar-right">
                        
						<li>Op dit moment bent u niet ingelogd.</li> 
						
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
				<span style="display:block; height:50px"></span>


				<p style="text-align:center;"><img src="" alt="Mountain View" style="width:304px;height:228px;"></p>
				<center><p style="text-align: center;"><h1>Responsive Management Dashboard</h1></p><center>

				<p style="text-align:center;"><div id="expl">Sample text</div></p> 

				<p style="text-align:center;"><div id= "form1" > Sample text</div></p>
				<p style="text-align:center;"><div id= "form2" >Sample text<div></p>
				

				
				
				
                </div>
            </div>
			<span style="display:block; height:100px"></span>
         <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 

   <center> <form action="includes/process_login.php" method="post" name="login_form">                      
            Email: <input type="text" name="email" />
            Wachtwoord: <input type="password" 
                             name="password" 
                             id="password"/>
            <input type="button" 
                   value="Login"
				  onclick="formhash(this.form, this.form.password);" />
        </form> </center>
		<span style="display:block; height:40px"></span>
 
<center> <?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
 
            echo '<p>Wilt u van gebruiker wisselen? <a href="includes/logout.php">Log out</a>.</p>';
        } else {
                        echo '<p>Op dit moment bent u logged ' . $logged . '.</p>';
                        echo "<p>Als u nog geen account heeft, registreer dan <a href='register.php'>hier</a></p>";
                }
?> </center> 

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                    </ul>
                </nav>
                
            </div>
        </footer>

    </div>
</div>


</body>





    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
	<script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>

    
   

</html>