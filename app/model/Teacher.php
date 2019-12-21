<?php
    class TeacherModel {
        private $id_profe;
        private $name;
        private $email;
        private $passwd;
        private $programa;
        private $DataBase;

        public function __construct() {
			$connection = new Conexion();
            $this->DataBase = $connection->get_conexion();
        }

        public function setId_Profe($id_profe) {
            $this->id_profe = $id_profe;
        }


        public function setNombres ($name) {
            $this->name = $name;
        }

        public function setEmail ($email) {
            $this->email = $email;
        }

        
        public function setPasswd ($passwd) {
            $this->passwd = $passwd;
        }

        public function setPrograma ($programa) {
            $this->programa = $programa;
        }
        /* ---------------------------------GET----------------------------------- */

        public function getId_Profe () {
            return $this->id_profe;
        }
        public function getNombres () {
            return $this->name;
        }

        public function getEmail () {
            return $this->email;
        }

        public function getPasswd () {
            return $this->passwd;
        }
        public function getPrograma () {
            return $this->programa;
        }

       
        public function registraProfe () {
            try {
                $sql = "INSERT INTO teacher (id_docente,names,email,pass,id_programa) VALUES (?,?,?,?,?)";
                $query = $this->DataBase->prepare($sql);
                $data = [
                    $this->getId_Profe(),
                    $this->getNombres(),
                    $this->getEmail(),
                    $this->getPasswd(),
                    $this->getPrograma()];
                $query->execute($data);
                $response = ['status' => 1, 'msg' => "Profesor guardado exitosamente"];
            } catch (Exception $e) {
                $response = ['status' => 0, 'error' => $e];
            }
            return $response;
        }

        public function allTeachers()
        {
          
            try {
                $sql = "SELECT * FROM teacher";
                $query = $this->DataBase->prepare($sql);
                $query->execute();
                $infoprofe = $query->fetchAll();
                $response = ['status' => 1, 'teachers' => $infoprofe];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }

        public function info($id)
        {
          
            try {
                $sql = "SELECT * FROM teacher where id_docente = ?";
                $query = $this->DataBase->prepare($sql);
                $data = [$id];
                $query->execute($data);
                $infoprofe = $query->fetch();
                $response = ['status' => 1, 'teachers' => $infoprofe];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }

        public function deleteTeacher($id)
        {
  
            try {
                $sql = "DELETE  FROM teacher WHERE id_docente  = ? ";
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
?>