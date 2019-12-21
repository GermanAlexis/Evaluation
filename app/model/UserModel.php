<?php
    class UserModel {
        private $id_user;
        private $name;
        private $email;
        private $passwd;
        private $rol;
        private $programa;
        private $DataBase;

        public function __construct() {
			$connection = new Conexion();
            $this->DataBase = $connection->get_conexion();
        }

        public function setId_User ($id_user) {
            $this->id_user = $id_user;
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

        public function setRol ($rol) {
            $this->rol = $rol;
        }

        public function setPrograma ($programa) {
            $this->programa = $programa;
        }
        /* ---------------------------------GET----------------------------------- */

        public function getId_User () {
            return $this->id_user;
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

        public function getRol () {
            return $this->rol;
        }
        public function getPrograma () {
            return $this->programa;
        }

            public function login()
        {
          
            try {
                $sql = "SELECT * FROM user WHERE id_user = ?";
                $query = $this->DataBase->prepare($sql);
                $data = [$this->getId_User()];
                $query->execute($data);
                $infousuario = $query->fetch();
                $response = ['status' => 1, 'id' => $infousuario];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }
        public function RegistroUser () {
            
            try {
                $sql = "INSERT INTO user (id_user,names,rol,email,pass,id_programa) VALUES (?,?,?,?,?,?)";
                $query = $this->DataBase->prepare($sql);
                $data = [$this->getId_User(),   
                         $this->getNombres(),
                         $this->getRol(),
                         $this->getEmail(),
                         $this->getPasswd(),
                         $this->getPrograma()];
                $query->execute($data);
                $response = ['status' => 1, 'msg' => "Usuario guardado exitosamente"];
            } catch (Exception $e) {
                $response = ['status' => 0, 'error' => $e];
            }
            return $response;
        }

        public function CambiarContrasena($email) {
            try {
                
                $sql = "UPDATE user SET contrasena = ? WHERE email = ?";
                $query = $this->DataBase->prepare($sql);
                $data = [$this->getPasswd(), $email];
                $query->execute($data);
                $response = ['status' => 1, 'msg' => "Se ha actualizado la contraseña correctamente"];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }
           
           
            return $response;
        }

        public function userall()
        {
          
            try {
                $sql = "SELECT * FROM user";
                $query = $this->DataBase->prepare($sql);
                $query->execute();
                $infousuario = $query->fetchAll();
                $response = ['status' => 1, 'id' => $infousuario];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }

        public function info($id)
        {
          
            try {
                $sql = "SELECT * FROM user where id_user = ?";
                $query = $this->DataBase->prepare($sql);
                $data = [$id];
                $query->execute($data);
                $infousuario = $query->fetch();
                $response = ['status' => 1, 'id' => $infousuario];
            } catch (Exception $e) {
                $response = ['status' => 0, 'Error'=>$e];
            }

            return $response;
        }

        public function deleteuser($id)
        {
          
            try {
                $sql = "DELETE  FROM user WHERE id_user  = ? ";
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