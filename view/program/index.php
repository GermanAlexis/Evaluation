<?php 
   
    $session = new SessionModel();
    $session->ValidateSession();
    $programas = new ProgramModel;
    $programa = $programas->allProgram();
?>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    
                        <div class="table-responsive text-center">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($programa['programs'] as $value) {
                                            $update = ABS_PATH."program/updateP/".$value['id_program']; // mirar si si el metodo revisar esta en agragar en el controlador
                                            $delete = ABS_PATH."program/deleteP/".$value['id_program'];
                                    ?>
                                    <tr>
                                        <td><?php echo $value['name_program']; ?></td>
                                        <td>
                                            <a href="<?php echo $update; ?>" class="btn btn-link"><span style="font-size: 2em; color: green;"><i class="fas fa-eye"></i></span></button>                                            
                                    
                                            <a href="<?php echo $delete; ?>" class="btn btn-link"><span style="font-size: 2em; color: red;"><i class="fas fa-trash-alt"></i></span></button>                                            
                                        </td>
                                        <?php } ?>
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <?php require dirname(__FILE__).'/../home/footer.php'?>