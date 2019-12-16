<?php
    use \vista\Vista;

    class EvaluationController {
     
        public function index() {
            return Vista::crear("evaluation.index");
        }

        public function newEvaluation() {
            return Vista::crear("evaluation.create");
        }
      
        public function deleteEvalaution(){
            return Vista::crear("evaluation.index");
        }
        
        public function updateEvaluation(){
            return Vista::crear("evaluation.index");
        }

        public function addE(){
            $data = $eval->addEvaluation();
            if ($data['status'] == 1) {
                Redirecciona::LetsGoTo('evaluation');
                echo $data['msg']; 
            } else {
                echo $data['error'];
            }
        }

        public function updateE($id_eval) {
            $modeleval = new EvaluationModel();
            $eval = $modeleval->infoEvaluation($id_eval);
            return Vista::crear("program.update",$eval['evaluations']);
        }

        public function deleteE($id_eval) {
            $modeleval = new EvaluationModel();
            $modeleval->deleteProgram($id_eval);
            Vista::crear("evaluation.index");
        }

    }
