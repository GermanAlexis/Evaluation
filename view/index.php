
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Evaluacion Docente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ASSETS_URL."images/favicon.ico"?>">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."vendor/bootstrap/css/bootstrap.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."vendor/animate/animate.css"?>" rel="stylesheet">
<!--===============================================================================================-->	
    <link href="<?php echo ASSETS_URL."vendor/css-hamburgers/hamburgers.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."vendor/animsition/css/animsition.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."vendor/select2/select2.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->	
    <link href="<?php echo ASSETS_URL."vendor/daterangepicker/daterangepicker.css"?>" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."fonts/font-awesome-4.7.0/css/font-awesome.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."fonts/Linearicons-Free-v1.0.0/icon-font.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."fonts/iconic/css/material-design-iconic-font.min.css"?>" rel="stylesheet">
<!--===============================================================================================-->
<!--===============================================================================================-->
    <link href="<?php echo ASSETS_URL."css/util.css"?>" rel="stylesheet">
    <link href="<?php echo ASSETS_URL."css/main.css"?>" rel="stylesheet">
<!--===============================================================================================-->

</head>
	
<body style="background-color: #999999;">

			<div class="limiter">
		<div class="container-login100">
        <div class="login100-more" style="background-image: url('<?php echo ASSETS_URL."images/EscudoUniversidad.png"?>');"></div>


			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <form class="login100-form validate-form" action="<?php echo ABS_PATH."user/signin"?>" method="POST">   
					<span class="login100-form-title p-b-59">
                        Evaluacion Docente
					</span>

					<div class="wrap-input100 validate-input" data-validate="Number is required">
						<span class="label-input100">Numero de Identificacion</span>
						<input class="input100" type="text" name="id" placeholder="Numero de identificacion">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

				

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
                                    Entrar
							</button>
						</div>

						<a href="user/nuevo" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	


<!--===============================================================================================-->
    <script src="<?php echo ASSETS_URL."vendor/jquery/jquery-3.2.1.min.js"?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo ASSETS_URL."vendor/animsition/js/animsition.min.js"?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo ASSETS_URL."vendor/bootstrap/js/popper.js"?>"></script>
    <script src="<?php echo ASSETS_URL."vendor/bootstrap/js/bootstrap.min.js"?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo ASSETS_URL."vendor/select2/select2.min.js"?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo ASSETS_URL."vendor/daterangepicker/moment.min.js"?>"></script>
    <script src="<?php echo ASSETS_URL."vendor/daterangepicker/daterangepicker.js"?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo ASSETS_URL."vendor/countdowntime/countdowntime.js"?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo ASSETS_URL."js/main.js"?>"></script>

</body>
</html>
                                       