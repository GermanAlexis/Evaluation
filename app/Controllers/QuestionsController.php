<?php
    use \vista\Vista;

    class QuestionController {

        
     
        public function index() {
            return Vista::crear("question.index");
        }

        public function newQuestion() {
            return Vista::crear("question.create");
        }
      
        public function deleteQuestion(){
            return Vista::crear("question.index");
        }
        
        public function updateQuestion(){
            return Vista::crear("question.index");
        }

        public function addQ(){
            $Q = new QuestionModel();
            $Q->setId_question($_POST['id_question']);
            $data = $prog->addQuestion();
            if ($data['status'] == 1) {
                Redirecciona::LetsGoTo('question');
                echo $data['msg']; 
            } else {
                echo $data['error'];
            }
        }

        public function updateQ($id_q) {
            $Q = new QuestionModel();
            $qId = $Q->infoQuestion($id_q);
            return Vista::crear("question.update",$qId['questions']);
        }

        public function deleteQ($id) {
            $Q= new QuestionModel();
            $Q->deleteQuestion($id);
            Vista::crear("question.update");
        }

    }