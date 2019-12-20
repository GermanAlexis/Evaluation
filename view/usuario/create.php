
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
    <link href="<?php echo ASSETS_URL."css/style.css"?>" rel="stylesheet">
<!--===============================================================================================-->
</head>
	
<body style="background-color: #999999;">

    
<div class="container">
        <div class="limiter">
	    	<div class="container-login100">
        <div class="login100-more" style="background-image: url('<?php echo ASSETS_URL."images/EscudoUniversidad.png"?>');"></div>


			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <form class="login100-form validate-form" action="<?php echo ABS_PATH."user/agregar"?>" method="POST"> 
					<span class="login100-form-title p-b-59"> Registro Nuevo</span>

					<div class="wrap-input100 validate-input" data-validate="Number is required">
						<span class="label-input100"><i class="ti-user"></i>Numero de Identificacion </span>
						<input class="input100" type="text" name="id" placeholder="Numero de identificacion">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<span class="label-input100"><i class="ti-user"></i>Nombre Completo</span>
						<input class="input100" type="text" name="name" placeholder="Nombre Completo">
						<span class="focus-input100"></span>
					</div>

          			<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<span class="label-input100"><i class="ti-email"></i>Correo</span>
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
    
          			<div class="wrap-input100 validate-input" data-validate = "Pass is required">
						<span class="label-input100"><i class="ti-user"></i>Contraseña</span>
						<input class="input100" type="password" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<input name="rol" value="1"  type="hidden">

   			        <div class="wrap-input100 validate-input  content-select select"  data-validate = "Program is required">
            		<select  name="program">
					<?php 
                       foreach ($key['programs'] as $value) { ?>  
                       <option value="<?php echo $value['id_program'];?>"><?php echo $value['name_program'];} ?> </option> 
                	</select>
					<span class="focus-input100"></span>
			</div>
      

			<div class="container-login100-form-btn">
				<div class="wrap-login100-form-btn">
					<div class="login100-form-bgbtn"></div>
					<button class="login100-form-btn">
                            Registrar
					</button>
			</div>

			<a href="<?php echo ABS_PATH."user/index"?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
				Atras		
			<i class="fa fa-long-arrow-right m-l-5"></i>
			</a>

</form>

                

