<?php
    use \vista\Vista;

    class UserController {
     
        public function index() {
            return Vista::crear("inicio.index");
        }

        public function nuevo() {
            $program = new ProgramModel();
            $programmodel = $program->allProgram(); 
            return Vista::crear("usuario.create",array('programs' => $programmodel['programs']));
        }
      
        public function registrarnuevo(){
            $program = new ProgramModel();
            $programmodel = $program->allProgram(); 
            return Vista::crear("usuario.register",array('programs' => $programmodel['programs']));
           
        }
        
        public function editaruser(){
            return Vista::crear("usuario.index");
        }

        public function agregar() {
           
            $usuario = new UserModel();
            $usuario->setId_User($_POST['id']);
            $usuario->setEmail($_POST['email']);
            $usuario->setNombres($_POST['name']);
            $passHash = password_hash($_POST['passwd'], PASSWORD_BCRYPT);
            $usuario->setPasswd($passHash);
            $usuario->setRol($_POST['rol']);
            $usuario->setPrograma($_POST['program']);
            $data = $usuario->RegistroUser();
               
            if ($data['status'] == 1) {
                    Redirecciona::LetsGoTo('home');
                    echo $data['msg']; 
            }else{
                        echo $data['error'];
                   }
            
            
        }

        public function editar($id) {
            $modeluser = new UserModel();
            $programModel = new ProgramModel();
            $requestProgram = $programModel->allProgram();
            $mande = $modeluser->info($id);
            return Vista::crear("usuario.update",array("users"=>$mande['users'], "programs"=>$requestProgram['programs']));
        }

        public function eliminar($id) {
            $modeluser = new UserModel();
            $modeluser->deleteuser($id);
            Vista::crear("usuario.update");
            
        }

        public function signin(){
            $usuario = new UserModel();
            $session = new SessionesModel();
            $usuario->setId_User($_POST['id']);
            $usuario->setPasswd($_POST['pass']);
            $data = $usuario->login();
            if ($data['id']['id_user'] == $usuario->getId_User()){
                $var =$data['id']['pass'];
                if (!password_verify($usuario->getPasswd(), $var)) {
                 
                    @session_start();
                    $session->CreateSession('user', $data['id']['names']);
                    Redirecciona::LetsGoTo('home');
                } else {
                    $notification = 'toastr.error("Datos erroneos", "Contraseña incorrecta")';
                    $session->CreateNotification($notification);
                    Redirecciona::LetsGoTo('');
                }
                } else {
                    echo "Usuario incorrecto";
                
            }
                
        }

        public function logout() {
            $session = new SessionModel();
            $session->DestroySession();
        }

        public function recoverypass() {
            $usuario = new UserModel();
            $session = new SessionesModel();

            $email = $_POST['email'];
            $newpass = $_POST['newpass'];
            $retrynewpass = $_POST['retrynewpass'];
            

            if ($newpass == $retrynewpass) {
                $usuario->setPasswd(password_hash($newpass, PASSWORD_BCRYPT));
                $data = $usuario->CambiarContrasena($email);

                if($data['status'] == 1) {
                    $notification = 'toastr.success("Accion exitosa", "'. $data['msg'] .'")';
                    $session->CreateNotification($notification);
                    Redirecciona::LetsGoTo('');
                } else {
                    //echo "Email incorrecto";
                    $notification = 'toastr.error("Datos erroneos", "Email incorrecto, no existe")';
                    $session->CreateNotification($notification);
                    Redirecciona::LetsGoTo('');    
                }
            } else {
                $notification = 'toastr.error("Datos erroneos", "Las contraseñas no coinciden")';
                $session->CreateNotification($notification);
                Redirecciona::LetsGoTo('');
            }
        }
    }
