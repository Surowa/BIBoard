<?php
include_once 'includes/register.inc.php';	
include_once 'includes/functions.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Management Dashboard</title>
	
	<script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
	
	
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />


    <link href="assets/css/animate.min.css" rel="stylesheet"/>

   
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
            <div class="logo">
                <a href="http://www.grassvalley.com" class="simple-text">
                    Grass Valley
                </a>
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

<!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <center><h1>Registreren bij het  Management Dashboard</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Uw gebruikersnaam mag alleen cijfers, hoofd- en kleine letters en lage streepjes bevatten</li>
            <li>Emailadressen moeten in een geldig format geschreven zijn</li>
            <li>Wachtwoorden moeten tenminste 6 karakters bevatten</li>
            <li>Wachtwoorden moeten tenminste bevatten:
                <ul>
                    <li>Minimaal één hoofdletter (A..Z)</li>
                    <li>Minimaal één kleine letter (a..z)</li>
                    <li>Minimaal één cijfer (0..9)</li>
                </ul>
            </li>
            <li>Wachtwoord en bevestiging wachtwoord moeten gelijk zijn</li>
        </ul>
        <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" 
                method="post" 
                name="registration_form">
            Gebruikersnaam: <input type='text' 
                name='username' 
                id='username' /><br>
				<span style="display:block; height:10px"></span>
            Email: <input type="text" name="email" id="email" /><br>
			<span style="display:block; height:10px"></span>
            Wachtwoord: <input type="password"
                             name="password" 
                             id="password"/><br>
							 <span style="display:block; height:10px"></span>
            Bevestiging wachtwoord: <input type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" /><br>
									 <span style="display:block; height:10px"></span>
            <input type="button" 
                   value="Register" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
        </form>
		<span style="display:block; height:10px"></span>
        <p>Keer terug naar de <a href="default.php">login pagina</a>.</p></center>
        


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
   
   
   
   