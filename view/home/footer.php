</div>

<script src="<?php echo ASSETS_URL."libs/jquery/dist/jquery.min.js"?>"></script>

<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo ASSETS_URL."libs/popper.js/dist/umd/popper.min.js"?>"></script>
<script src="<?php echo ASSETS_URL."libs/bootstrap/dist/js/bootstrap.min.js"?>"></script>
<script src="<?php echo ASSETS_URL."libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"?>"></script>
<script src="<?php echo ASSETS_URL."extra-libs/sparkline/sparkline.js"?>"></script>

<!--Wave Effects -->
<script src="<?php echo ASSETS_URL."dist/js/waves.js"?>"></script>

<!--Menu sidebar -->
<script src="<?php echo ASSETS_URL."dist/js/sidebarmenu.js"?>"></script>

<!--Custom JavaScript -->
<script src="<?php echo ASSETS_URL."dist/js/custom.min.js"?>"></script>
<script src="<?php echo ASSETS_URL."libs/flot/excanvas.js"?>"></script>
<script src="<?php echo ASSETS_URL."libs/flot/jquery.flot.js"?>"></script>
<script src="<?php echo ASSETS_URL."libs/flot/jquery.flot.pie.js"?>"></script>
<script src="<?php echo ASSETS_URL."libs/flot/jquery.flot.time.js"?>"></script>
<script src="<?php echo ASSETS_URL."libs/flot/jquery.flot.stack.js"?>"></script>
<script src="<?php echo ASSETS_URL."libs/flot/jquery.flot.crosshair.js"?>"></script>
<script src="<?php echo ASSETS_URL."libs/flot.tooltip/js/jquery.flot.tooltip.min.js"?>"></script>
<script src="<?php echo ASSETS_URL."dist/js/pages/chart/chart-page-init.js"?>"></script>
<script src="<?php echo ASSETS_URL."extra-libs/multicheck/datatable-checkbox-init.js"?>"></script>
<script src="<?php echo ASSETS_URL."extra-libs/multicheck/jquery.multicheck.js"?>"></script>
<script src="<?php echo ASSETS_URL."extra-libs/DataTables/datatables.min.js"?>"></script>
<script src="<?php echo ASSETS_URL."libs/toastr/build/toastr.min.js"?>"></script>
<script>
    /****************************************
     *       Basic DataTable                   *
     ****************************************/
    $('#zero_config').DataTable();
    $('#tablabacana').DataTable();
</script>

<script>
            $(document).on('click', '.calificar', function (e) {
                e.preventDefault();
                var idCalificacion = $(this).attr('id');
                var idTable = $(this).closest('tr').attr('id');
                var idEvaluation = 2;

                
                datos = {
                           "fk_evaluation": idEvaluation,
                           "fk_question": idTable,
                           "value_qualify": idCalificacion
                        };
                       $.ajax({
                           url:"<?php echo ABS_PATH."califica/enviarCalificacion"?>",
                           type: "POST",
                           data: datos
                       })
                       .done(function (respuesta) {
                           if(respuesta[status] == 1){
                                $(this).closest('tr').remove();
                           }else{
                            printf("algo anda mal");
                           }
                       });
            });
        </script>

</body>

</html>

