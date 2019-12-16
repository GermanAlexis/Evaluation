<?php 
    $session = new SessionModel();
    $session->ValidateSession();
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <div class="row">
                    <div class="card-body">
                   
                     <form class="login100-form validate-form" action="<?php echo ABS_PATH."program/addP"?>" method="POST">   
					    <span class="login100-form-title p-b-59">Actualizar Programa	</span>

                                <div class="wrap-input100 validate-input" data-validate = "Name is required">
                                    <span class="label-input100"><i class="ti-user"></i> Nombre del programa</span>
                                    <input class="input100" type="text" name="name_program" placeholder="Nombre del programa">
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                            <button class="login100-form-btn">
                                                    Guardar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                    </form>

  <?php require dirname(__FILE__).'/../home/footer.php'?>