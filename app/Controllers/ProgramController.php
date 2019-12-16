<?php
    use \vista\Vista;

    class ProgramController {
     
        public function index() {
            return Vista::crear("program.index");
        }

        public function newProgram() {
            return Vista::crear("program.create");
        }
      
        public function deleteProgram(){
            return Vista::crear("program.index");
        }
        
        public function updateProgram(){
            return Vista::crear("program.index");
        }

        public function addP(){
            $prog = new ProgramModel();
            $prog->setNameProgram($_POST['name_program']);
            $data = $prog->addProgram();
            if ($data['status'] == 1) {
                Redirecciona::LetsGoTo('program');
                echo $data['msg']; 
            } else {
                echo $data['error'];
            }
        }

        public function updateP($id_prog) {
            $modelprog = new ProgramModel();
            $progId = $modelprog->infoProgram($id_prog);
            return Vista::crear("program.update",$progId['programs']);
        }

        public function deleteP($id_prog) {
            $modelprog = new ProgramModel();
            $modelprog->deleteProgram($id_prog);
            Vista::crear("program.index");
        }

    }
