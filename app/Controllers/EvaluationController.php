<?php
    use \vista\Vista;

    class EvaluationController {
     
        public function index() {
           
            return Vista::crear("evaluation.index");
        }

        public function newEvaluation() {
            $programa = new ProgramModel();
            $programas = $programa->allProgram();
            return Vista::crear("evaluation.create", array('programa' => $programas['programs']));
        }
//   
        public function addE(){
            $eval = new EvaluationModel();
            $eval->setNumber($_POST["number"]);
            $eval->setPrograma($_POST["program"]);
            $eval->setUser($_SESSION['user_id']);
            $data = $eval->addEvaluation();

            if ($data['status'] == 1) {
                Redirecciona::LetsGoTo('evaluation');
                echo $data['msg']; 
            } else {
                echo $data['error'];
            }
        }

        public function evaluation() {
        
            return Vista::crear("evaluation.evaluation");
        }

        public function deleteE($id_eval) {
            $modeleval = new EvaluationModel();
            $modeleval->deleteProgram($id_eval);
            Vista::crear("evaluation.index");
        }

    }
