<?php 
    class QuestionModel{
        private $id_question;
        private $name_question;

        public function __construct(){
            $connection = new Conexion();
            $this->DataBase = $connection->get_conexion();
            $query = $this->DataBase->prepare($sql);
        }

        public function setId_Question($id_question){
            $this->id_question =$id_question;
        }

        public function setNameProgram($name_question){
            $this->name_question = $name_question;
        }

        public function getId_Program(){
            return $this->id_question;
        }

        public function getName_Program(){
            return  $this->name_question;
        }

        public function addQuestion()
        {
            try {
                $sql = "INSERT INTO questions (id_question,name_question) VALUES (?,?)";
                $data = [$this->getId_Question(),
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
                $query->execute($data);
                $response = ['status' => 1, 'msg'=>" dato eliminado exitosamente"];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }
    }