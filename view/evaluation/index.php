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
                        <div class="card" style="width: 18rem;">
  
                                <div class="card-body">
                                    <h5 class="card-title">Hacer evaluacion</h5>
                                    <p class="card-text">Aqui se realizara la encuentas que evaluara a los docentes</p>
                                    <a href="<?php echo ABS_PATH."evaluation/newEvaluation"?>"  class="btn btn-primary">Hacer</a>
                                </div>
                        </div>
                    </div>
                </div>
           
      
                         <div class="card" style="width: 18rem;">
           
                                 <div class="card-body">
                                    <h5 class="card-title">informe Evaluacion</h5>
                                    <p class="card-text">Aqui se tendra el resultado de todas las evalauaciones de los docentes</p>
                                    <a href="evaluacion/updateE" class="btn btn-primary">ir a informe</a>
                                 </div>
                        </div>
                
            </div>

            
<?php require dirname(__FILE__).'/../home/footer.php'?>
                

