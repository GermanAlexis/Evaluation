<?php 
    class EvaluationModel{
        
        private $number;
        private $teacher;

        public function __construct(){
            $connection = new Conexion();
            $this->DataBase = $connection->get_conexion();
        }
        public function setNumber($number){
            $this->number =  $number;
        }
        public function setTeacher($teacher){
            $this->teacher =  $teacher;
        }
        public function getNumber(){
            return  $this->number;
        }
        public function getTeacher(){
            return  $this->teacher;
        }

        public function addEvaluation()
        {
            try {
                $sql = "INSERT INTO evaluation (id_teacher,number_questions) VALUES (?,?)";
                $query = $this->DataBase->prepare($sql);
                $data = [$this->getTeacher(), $this->getNumber()];
                $query->execute($data);
                $response = ['status' => 1, 'msg' => "evaluacion guardado exitosamente"];
            } catch (Exception $e) {
                $response = ['status' => 0, 'error' => $e];
            }
            return $response;
        }
        

        public function allEvaluation()
        {
          
            try {
                $sql = "SELECT * FROM evaluation";
                $query = $this->DataBase->prepare($sql);
                $query->execute();
                $infoevaluation = $query->fetchAll();
                $response = ['status' => 1, 'evaluations' => $infoevaluation];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }
        
        public function infoEvaluation($id){

            try {
                $sql = "SELECT * FROM evaluation where id_evaluation = ?";
                $query = $this->DataBase->prepare($sql);
                $data = [$id];
                $query->execute($data);
                $infoevaluation = $query->fetch();
                $response = ['status' => 1, 'evaluations' => $infoevaluation];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }
            return $response;
        }

        public function deleteProgram($id)
        {
          
            try {
                $sql = "DELETE  FROM program WHERE id_program  = ? ";
                $query = $this->DataBase->prepare($sql);
                $data = [$id];
                $query->execute($data);
                $response = ['status' => 1, 'msg'=>" dato eliminado exitosamente"];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }
    }