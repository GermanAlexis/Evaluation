<?php 
    class ProgramModel{
        private $id_program;
        private $name_program;

        public function __construct(){
            $connection = new Conexion();
            $this->DataBase = $connection->get_conexion();
            
        }


        public function setNameProgram($name_program){
            $this->name_program = $name_program;
        }

     

        public function getName_Program(){
            return  $this->name_program;
        }

        public function addProgram()
        {
            try {
                $sql = "INSERT INTO program (name_program) VALUES (?)";
                $query = $this->DataBase->prepare($sql);
                $data = [   
                         $this->getName_Program()
                        ];
                $query->execute($data);
                $response = ['status' => 1, 'msg' => "Programa guardado exitosamente"];
            } catch (Exception $e) {
                $response = ['status' => 0, 'error' => $e];
            }
            return $response;
        }
        

        public function allProgram()
        {
          
            try {
                $sql = "SELECT * FROM program";
                $query = $this->DataBase->prepare($sql);
                $query->execute();
                $infprogram = $query->fetchAll();
                $response = ['status' => 1, 'programs' => $infprogram];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }
        
        public function infoProgram($id){

            try {
                $sql = "SELECT * FROM program where id_program = ?";
                $query = $this->DataBase->prepare($sql);
                $data = [$id];
                $query->execute($data);
                $infoprogram = $query->fetch();
                $response = ['status' => 1, 'programs' => $infoprogram];
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