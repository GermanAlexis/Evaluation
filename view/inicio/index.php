<?php 
    $session = new SessionModel();
    $session->ValidateSession();
?>

<div class="page-wrapper mt-3">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo ASSETS_URL."images/DSC_0333.JPG"?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo ASSETS_URL."images/logo_bienestar.png"?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require dirname(__FILE__).'/../home/footer.php'?>
