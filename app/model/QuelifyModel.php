<?php 
    class QualifyModel{
        private $id_evaluation;
        private $id_question;
        private $value;

        public function __construct(){
            $connection = new Conexion();
            $this->DataBase = $connection->get_conexion();
           
        }
       
        public function setEvaluationId($id_evaluation){
            $this->id_evaluation = $id_evaluation;
        }

        public function getEvaluationId(){
            return  $this->id_evaluation;
        }

        public function setQuestionId($id_question){
            $this->id_question = $id_question;
        }

        public function getQuestionId(){
            return  $this->id_question;
        }


        public function setValor($value){
            $this->value = $value;
        }

        public function getValor(){
            return  $this->$value;
        }


        public function addCalificacion()
        {
            try {
                $sql = "INSERT INTO qualify_evaluation (fk_evaluation,fk_question,value_quealify) VALUES (?,?,?)";
                $query = $this->DataBase->prepare($sql);
                $data = [
                         $this->getEvaluationId(),
                         $this->getQuestionId(),
                         $this->getValor()
                        ];
                $query->execute($data);
                $response = ['status' => 1, 'msg' => "Programa guardado exitosamente"];
            } catch (Exception $e) {
                $response = ['status' => 0, 'error' => $e];
            }
            return $response;
        }
    }