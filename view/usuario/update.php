<?php 
    $session = new SessionModel();
    $session->ValidateSession();
?>
  
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                        <div>
                            <div class="text-center p-t-20 p-b-20">
                                <span class="db"><img src="<?php echo ASSETS_URL.""?>" width="80%" alt="" /></span>                                
                            </div>        
                            <!-- Form -->
                                <form class="login100-form validate-form" action="<?php echo ABS_PATH."user/agregar"?>" method="POST">   
                                <div class="wrap-input100 validate-input" data-validate="Number is required">
                                    <span class="label-input100"><i class="fas fa-id-card"></i> Numero de Identificacion </span>
                                    <input class="input100" type="text" name="id"  value="<?php  echo $key['users']['id_user']?>" placeholder="Numero de identificacion">
                                    <span class="focus-input100"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "Name is required">
                                    <span class="label-input100"><i class="ti-user"></i>Nombre Completo</span>
                                    <input class="input100" type="text" name="name" value="<?php  echo $key['users']['names']?>"  placeholder="Nombre Completo">
                                    <span class="focus-input100"></span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "Email is required">
                                    <span class="label-input100"><i class="ti-email"></i>Correo</span>
                                    <input class="input100" type="email" name="email"  value="<?php  echo $key['users']['email']?>" placeholder="Email">
                                    <span class="focus-input100"></span>
                                </div>
                
                                <div class="wrap-input100 validate-input" data-validate = "Pass is required">
                                    <span class="label-input100"><i class="fas fa-unlock-alt"></i>Contraseña</span>
                                    <input class="input100" type="password" name="pass" placeholder="*************">
                                    <span class="focus-input100"></span>
                                </div>

                                <div class="wrap-input100 validate-input content-select select" data-validate = "Rol is required">
                                 
                                    <select   name="rol">
                                        <option value="0">Administrador</option>
                                        <option value="1">Docente</option>
                                        <option value="2">Estudiante</option>
                                    </select>
                                    <span class="focus-input100"></span>
                                </div>

                                <div class="wrap-input100 validate-input  content-select select"  data-validate = "Program is required">
                                <select>
                                <?php 
                                        foreach ($key['programs'] as $value) { ?>  
                                        <option value="<?php $value['id_program'];?>"><?php echo $value['name_program'];} ?> </option>
                                    </select>
                                    <span class="focus-input100"></span>
                                </div>
                

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn">
                                            Registrar
                                    </button>
                            
                            
                            </form>
                            </div>                 
    </div>

 <?php require dirname(__FILE__).'/../home/footer.php'?>