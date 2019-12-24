<?php
    use \vista\Vista;

    class QuestionsController {

        
     
        public function index() {
            return Vista::crear("question.index");
        }

        public function newQuestion() {
            return Vista::crear("question.create");
        }
      
        public function deleteQuestion(){
            
            return Vista::crear("question.index");
        }
        
        public function addQ(){
            $Q = new QuestionModel();
            $sendpregunta = $_POST['preguntas'];
            foreach ($sendpregunta as $pregunta) {
                $Q->setName_Question($pregunta);
                $data = $Q->addQuestion();
            }
        
            if ($data['status'] == 1) {
                Redirecciona::LetsGoTo('question.index');
                echo $data['msg']; 
            } else {
                echo $data['error'];
            }

        }

        public function deleteQ($id) {
            $Q= new QuestionModel();
            $Q->deleteQuestion($id);
            Vista::crear("question.index");
        }
    }
