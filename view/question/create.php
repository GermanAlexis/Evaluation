<?php 
    $session = new SessionModel();
    $session->ValidateSession();
?>
<div class="page-wrapper">
    <div class="container-fluid">
            <div>
                <input  id="pregunta" class="form-control mt-3" placeholder="Digite Pregunta" type="text"><br>
            </div>
            <div>
                <button class="btn btn-dark btn-block" id="btnpregunta" > Agregar Pregunta</button>
            </div>
            <form id="example-form" action="<?php echo ABS_PATH."questions/addQ"?>" method="POST">
            <div class="row">
                <div id="vidpregunta" class="form-group col-sm-8"></div>
                <div id="borrarpregunta" class="form-group col-sm-2"></div>
            </div>
            <div>
                <input type="submit" class="btn btn-dark btn-block"  name="sendpreguntas" >
            </div>                
            </form>
            
        

</div> 
<script>
    var contador=0;
 btnpregunta.onclick = () => {

          
            var inputpregunta = document.getElementById('pregunta').value;    
            var vidpregunta = document.getElementById('vidpregunta');
            var borrarpregunta = document.getElementById('borrarpregunta');
             
             var x = document.createElement('input');
             x.setAttribute("class", "form-control mt-3");
             x.setAttribute("name", "preguntas[]");
             x.setAttribute("id" , `pregunta-${contador}`);
             x.setAttribute("value", inputpregunta);
             vidpregunta.appendChild(x);


             var d = document.createElement('button');
                d.innerHTML = "<span style='font-size: 1em; color: Tomato;'><i class='fas fa-trash'></i></span>";
                d.setAttribute("class", "mt-4 ml-2 btn btn-link col-sm-12 ");
                d.setAttribute("id" , `${contador}`);
                d.setAttribute("onclick", "obtenerId(this)");
                d.setAttribute("type" , "button");
                d.setAttribute("value", "Borrar");
                borrarpregunta.appendChild(d);


            
            
             contador ++;
             document.getElementById('pregunta').value=" ";
 }

            function obtenerId(path) {
            var id = path.getAttribute("id")
            var pregunta = document.getElementById(`pregunta-${id}`);
            var eraseButton = document.getElementById(id);
            pregunta.remove();
            eraseButton.remove();
            }

 
</script>
    
  <?php require dirname(__FILE__).'/../home/footer.php'?>