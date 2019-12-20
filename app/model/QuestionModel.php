<?php 
    class QuestionModel{
        private $id_question;
        private $name_question;

        public function __construct(){
            $connection = new Conexion();
            $this->DataBase = $connection->get_conexion();
           
        }


        public function setName_Question($name_question){
            $this->name_question = $name_question;
        }

    

        public function getName_Question(){
            return  $this->name_question;
        }

        public function addQuestion()
        {
            try {
                $sql = "INSERT INTO questions (name_question) VALUES (?)";
                $query = $this->DataBase->prepare($sql);
                $data = [
                         $this->getName_Question(),
                        ];
                $query->execute($data);
                $response = ['status' => 1, 'msg' => "Programa guardado exitosamente"];
            } catch (Exception $e) {
                $response = ['status' => 0, 'error' => $e];
            }
            return $response;
        }
        

        public function allQuestion()
        {
          
            try {
                $sql = "SELECT * FROM questions";
                $query = $this->DataBase->prepare($sql);
                $query->execute();
                $infprogram = $query->fetchAll();
                $response = ['status' => 1, 'questions' => $infprogram];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }
        
        public function infoQuestion($id){

            try {
                $sql = "SELECT * FROM questions where id_question = ?";
                $query = $this->DataBase->prepare($sql);
                $data = [$id];
                $query->execute($data);
                $infoprogram = $query->fetch();
                $response = ['status' => 1, 'questions' => $infoprogram];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }
            return $response;
        }

        public function deleteQuestion($id)
        {
          
            try {
                $sql = "DELETE  FROM questions WHERE id_question  = ? ";
                $data = [$id];
                $query = $this->DataBase->prepare($sql);
                $query->execute($data);
                $response = ['status' => 1, 'msg'=>" dato eliminado exitosamente"];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }
    }