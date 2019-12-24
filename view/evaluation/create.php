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
                   
                     <form class="login100-form validate-form" action="<?php echo ABS_PATH."evaluation/addE"?>" method="POST">   
					    <span class="login100-form-title p-b-59">Agregar Evaluacion	</span>

                                <div class="wrap-input100 validate-input" data-validate = "Number is required">
                                    <span class="label-input100"><i class="fas fa-sort-numeric-up"></i>  Numero de preguntas</span>
                                    <input class="input100" type="text" name="number" placeholder="Numero de preguntas">
                                    <span class="focus-input100"></span>
                                </div>

                                <div class="wrap-input100 validate-input  content-select select"  data-validate = "teacher is required">
            		                <select  name="program">
					                    <?php foreach ($key['programa'] as $run) { ?>  
                                            <option value="<?php echo $run['id_program'];?>"><?php echo $run['name_program'];?> </option> 
                                        <?php }?>  
                	                </select>
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
                

