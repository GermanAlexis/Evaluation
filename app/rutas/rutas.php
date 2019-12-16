<?php
//todas las rutas disponibles en nuestra aplicación
$ruta = new Ruta();
$ruta->controladores(array(
    "/" => "WelcomeController",
    "/user"  => "UserController",
    "/home"     => "HomeController",
    "/answers" => "AnswersController",
    "/questions" => "QuestionController",
    "/program" => "ProgramController",
    "/evaluation" => "EvaluationController"
));
