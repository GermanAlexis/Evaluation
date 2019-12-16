<?php
    use \vista\Vista;

    class AnswersController {

        
     
        public function index() {
            return Vista::crear("answers.index");
        }

        public function newAnswers() {
            return Vista::crear("answers.create");
        }
      
        public function deleteAnswers(){
            return Vista::crear("answers.index");
        }
        
        public function updateAnswers(){
            return Vista::crear("answers.index");
        }

        public function addA(){
            $Ans = new AnswersModel();
            $Ans->setId_Answers($_POST['id_answers']);
            $Ans->setNice_Answers($_POST['nice_answers']);
            $Ans->setRegular_Answers($_POST['regular_answers']);
            $Ans->setBad_Answers($_POST['bad_answers']);
            $data = $Ans->addAnswers();
            if ($data['status'] == 1) {
                Redirecciona::LetsGoTo('answers');
                echo $data['msg']; 
            } else {
                echo $data['error'];
            }
        }

        public function updateA($id_a) {
            $ans = new AnswersModel();
            $AnsId = $ans>infoAnswers($id_a);
            return Vista::crear("answers.update",$AnsId['answers']);
        }

        public function deleteA($id) {
            $Ans= new answersModel();
            $Ans->deleteAnswers($id);
            Vista::crear("answers.update");
        }

    }
