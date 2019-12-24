<?php
    use \vista\Vista;

    class QualifyEvaluationController {

        
     
        public function index() {
            return Vista::crear("evaluation.evaluation");
        }

        
        public function enviarCalificacion(){

            header('Content-Type: application/json');
            $calica = new QualifyModel();
            $calica->setEvaluationId($_POST['fk_evaluation']);
            $calica->setQuestionId($_POST['fk_question']);
            $calica->setValor($_POST['value_qualify']);
            // $data = $califica->addCalificacion();
            $datos = array(
                'calificacion' => $_POST['value_qualify'],
                'pregunta' => $_POST['fk_question'],
                'valor' => $_POST['fk_evaluation'],
             
            );
             
            echo json_encode($datos, JSON_FORCE_OBJECT);
           
        }
    }
