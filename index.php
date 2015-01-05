<?php 
    require_once 'header.php';
    require_once 'nav.php'; 
?>
       
        <div class="row">
            <div class="homeskybg background" data-img-width="2560" data-img-height="505">
                <div class="container">
                    <div class="col-xs-7">Left</div 
                    <div class="col-xs-5">Right</div

                </div>
            </div> 
        </div>
        <div class="row homemostviewed">
            <div class="container">
                <div class="row">
                    <div id="idms-widget-carousel" class="carousel slide">    
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li id="home-image-slide-modal-control-0" data-target="#idms-widget-carousel" data-slide-to="0" class="active"></li>
                            <li id="home-image-slide-modal-control-1" data-target="#idms-widget-carouselc" data-slide-to="1" class="active"></li>
                            <li id="home-image-slide-modal-control-2"data-target="#idms-widget-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <ul class="carousel-inner">   
                            <li class="item active" class="" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                                <a type="button" class=" col-md-4 btn home-image-slide-modal-0 item-content" data-toggle="modal-popover" data-target="#home-image-slide-modal-0"
                                   href="#home-image-slide-modal-0">
                                    <img src="http://placehold.it/1200x315" alt="..." class="img-responsive">
                                </a>
                                <a type="button" class="col-md-4 btn home-image-slide-modal-1 item-content" data-toggle="modal-popover" data-target="#home-image-slide-modal-1"
                                   href="#1"> 
                                    <img src="http://placehold.it/350x150" alt="..." class="img-responsive">
                                </a>
                            </li>
                            <li class="item">
                                <a type="button" class="col-md-4 btn home-image-slide-modal-1 item-content" data-toggle="modal-popover" data-target="#home-image-slide-modal-1"
                                   href="#1"> 
                                    <img src="http://placehold.it/1200x315" alt="..." class="img-responsive">
                                </a>
                                <a type="button" class="col-md-4 btn home-image-slide-modal-1 item-content" data-toggle="modal-popover" data-target="#home-image-slide-modal-1"
                                   href="#1"> 
                                    <img src="http://placehold.it/350x150" alt="..." class="img-responsive">
                                </a>
                            </li> 
                            <li class="item">
                                <a type="button" class="col-md-4 btn home-image-slide-modal-1 item-content" data-toggle="modal-popover" data-target="#home-image-slide-modal-1"
                                   href="#1"> 
                                    <img src="http://placehold.it/350x150" alt="..." class="img-responsive">
                                </a>
                                <a type="button" class=" col-md-4 btn home-image-slide-modal-2 item-content" data-toggle="modal-popover" data-target="#home-image-slide-modal-2" 
                                   href="#2"> 
                                    <img src="http://placehold.it/1200x315" alt="..." class="img-responsive">
                                </a>
                            </li>
                        </ul>
                        <!--Image slide Popped-->
                        <div id="home-image-slide-modal-0" class="idms-slide-popover col-md-4 ">
                            <img src="http://placehold.it/1200x315" alt="..." class="img-responsive"> 
                        </div>
                        <div id="home-image-slide-modal-1" class="idms-slide-popover col-md-4 hide">
                            <img src="http://placehold.it/200x100" alt="..." class="img-responsive"> 
                        </div>
                        <div id="home-image-slide-modal-2" class="idms-slide-popover col-md-4 hide">
                            <img src="http://placehold.it/200x200" alt="..." class="img-responsive"> 
                        </div>
                        <!-- Controls -->

                        <a  id="idms-slide-left" class="left carousel-control border-blue" href="#left" role="button" data-slide="prev">
                            <span  class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a  id="idms-slide-right"  class="right carousel-control border-blue" href="#right" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div> <!-- Carousel -->
                </div>
                <div class="row">                       
                    SEE
                </div>
                <div class="row">
                    <center>BUTTON</center>
                </div>
            </div>
        </div>
        <div class="row home_about_idata">
            <div class="container">
                Aboot Idata
            </div>
        </div>
<?php require_once 'footer.php'; ?>

