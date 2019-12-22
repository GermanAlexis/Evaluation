<?php
    use \vista\Vista;

    class EvaluationController {
     
        public function index() {
            return Vista::crear("evaluation.index");
        }

        public function newEvaluation() {
            $teacher = new TeacherModel();
            $profesores = $teacher->allTeachers();
            return Vista::crear("evaluation.create", array('teachers' => $profesores['teachers']));
        }
//   
        public function addE(){
            $eval = new EvaluationModel();
            $eval->setNumber($_POST["number"]);
            $eval->setTeacher($_POST["teacher"]);
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
