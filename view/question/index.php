<?php 
    $session = new SessionModel();
    $session->ValidateSession();
    $question = new QuestionModel();
    $questions = $question->allQuestion();
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
                                        <th>pregunta</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($questions['questions'] as $value) {
            
                                            $delete = ABS_PATH."question/deleteQ/".$value['id_question'];
                                    ?>
                                    <tr>
                                        <td><?php echo $value['name_question']; ?></td>
                                        <td>                                    
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