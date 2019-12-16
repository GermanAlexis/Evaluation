<?php 
    class AnswersModel{
        private $id_answer;
        private $nice_answer;
        private $regular_answer;
        private $bad_answer;

        public function __construct(){
            $connection = new Conexion();
            $this->DataBase = $connection->get_conexion();
            $query = $this->DataBase->prepare($sql);
        }

        public function setId_Answers($id_answer){
            $this->id_answer =$id_answer;
        }

        public function setNice_Answers($nice_answer){
            $this->nice_answer = $nice_answer;
        }

        public function setRegular_Answers($regular_answer){
            $this->regular_answer = $regular_answer;
        }

        public function setBad_Answers($bad_answer){
            $this->bad_answer = $bad_answer;
        }

        public function getId_Answers(){
            return $this->id_answer;
        }

        public function getNice_Answers(){
            return  $this->nice_answer;
        }
        public function getRegular_Answers(){
            return  $this->regular_answer;
        }
        public function getBad_Answers(){
            return  $this->bad_answer;
        }

        public function addAnswer()
        {
            try {
                $sql = "INSERT INTO answers (id_answers,buena,regular,mal) VALUES (?,?,?,?)";
                $data = [$this->getId_Answers(),
                         $this->getNice_Answers(),
                         $this->getRegular_Answers(),
                         $this->getBad_Answers()
                        ];
                $query->execute($data);
                $response = ['status' => 1, 'msg' => "Respuestas guardado exitosamente"];
            } catch (Exception $e) {
                $response = ['status' => 0, 'error' => $e];
            }
            return $response;
        }
        

        public function allAnswers()
        {
          
            try {
                $sql = "SELECT * FROM answers";
                $query->execute();
                $infprogram = $query->fetchAll();
                $response = ['status' => 1, 'answers' => $infprogram];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }
        
        public function infoAnswers($id){

            try {
                $sql = "SELECT * FROM answers where id_answers = ?";
                $data = [$id];
                $query->execute($data);
                $infoprogram = $query->fetch();
                $response = ['status' => 1, 'answers' => $infoprogram];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }
            return $response;
        }

        public function deleteAnswers($id)
        {
          
            try {
                $sql = "DELETE  FROM answers WHERE id_answer  = ? ";
                $data = [$id];
                $query->execute($data);
                $response = ['status' => 1, 'msg'=>" dato eliminado exitosamente"];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }
    }