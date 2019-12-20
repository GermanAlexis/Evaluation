<?php
    use \vista\Vista;

    class TeacherController {
     
        public function index() {
            return Vista::crear("inicio.index");
        }

        public function nuevo() {
            $program = new ProgramModel();
            $programmodel = $program->allProgram(); 
            return Vista::crear("teacher.create",array('programs' => $programmodel['programs']));
        }
        
        public function editarTeacher(){
            $profe = new TeacherModel();
            $datoProfe = $profe->allTeachers(); 
            return Vista::crear("teacher.index", array('teacher'=> $datoProfe['teachers']));
        }

        public function agregar() {
            $profe = new TeacherModel();
            $profe->setId_Profe($_POST['id']);
            $profe->setEmail($_POST['email']);
            $profe->setNombres($_POST['name']);
            $passHash = password_hash($_POST['passwd'], PASSWORD_BCRYPT);
            $profe->setPasswd($passHash);
            $profe->setPrograma($_POST['program']);  
            $dataprofe = $profe->registraProfe();

            if ($dataprofe['status'] == 1) {
                Redirecciona::LetsGoTo('home');
                echo $dataprofe['msg']; 
            } else {
                echo $dataprofe['error'];
            }
        }
        public function editar($id) {
            $program = new ProgramModel();
            $teacher = new TeacherModel();
            $teachermodel = $teacher->info($id);
            $programmodel = $program->allProgram(); 
            return Vista::crear("teacher.update",array('programs' => $programmodel['programs'], 'teachers' => $teachermodel['teachers']));
        }
        public function eliminar($id) {
            $modeluser = new TeacherModel();
            $modeluser->deleteTeacher($id);
            Vista::crear("teacher.index");
            
        }
    }