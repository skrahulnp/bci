<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCI - Nepal</title>


    <style>
    .img {
        height: 70vh !important;
    }
    </style>

    
</head>

<body>

<?php
require('nav.php');
require('cardStyle.php');

?>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img1.jpg" class="d-block w-100 img" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/img2.jpg" class="d-block w-100 img" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/img3.jpg" class="d-block w-100 img" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <div class="container p-3 mt-3">

        <h3 class="text-center text-primary">Welcome To Here!</h3>


        <div class="container">
            <div class="badge bg-primary text-wrap" style="width: 6rem;">BCI NEPAL</div>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <hr />
            <h3 class="text-center text-primary mt-3 pt-3">Our Top Service</h3>
            <div class="cotainer-fluid p-3 pt-0 border" >
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                <div class="col">
                    <div class="card">
                        <img src="https://hackernoon.com/drafts/h7yw28l8.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ANDROID APPLICATION</h5>
                            <p class="card-text">We served you world best class of android app. Our Adroid app have best look on ui and also ux.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://mk0designbombsg12amh.kinstacdn.com/wp-content/uploads/2017/02/make-a-website.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">WEB DEVELOPMENT</h5>
                            <p class="card-text">We make the amazing user required web sites as they want. Grow your buisness by digitalized your buisness.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="https://existek-838c.kxcdn.com/wp-content/uploads/2018/12/best-frameworks-for-desktop-application-development-header-image.jpg		" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">DESKTOP APPLICATION</h5>
                            <p class="card-text">A perfect buisness management or organization system provided by us. </p>
                        </div>
                    </div>
                </div>

                

            </div>
            <div class="d-flex justify-content-end pt-3">
                <a href="service" class="btn btn-primary">See More>></a>
                </div>
            </div>
        </div>

    </div>

  
  <!-- Client Code -->

  <!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h3 class="section-title">SOME WORDS FROM CLIENT</h3>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://scontent.fktm10-1.fna.fbcdn.net/v/t1.0-0/p526x296/10488210_940178989340817_4832985681114014753_n.jpg?_nc_cat=101&ccb=2&_nc_sid=ba80b0&_nc_ohc=Pob-lbjNX5gAX9-BS1Y&_nc_ht=scontent.fktm10-1.fna&tp=6&oh=89be497411e570f37ee6551fb3146bfe&oe=60342D34" 
                                    alt="card image"></p>
                                    <h4 class="card-title">Shree Mill's Secondary School</h4>
                                    <p class="card-text">We trust on BCI for secure and trustable service that they provide.</p>
                                    <a class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Shree Mill's Secondary School</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://scontent.fktm10-1.fna.fbcdn.net/v/t1.0-9/119691027_108613770995207_5609711744251204688_o.png?_nc_cat=107&ccb=2&_nc_sid=09cbfe&_nc_ohc=_1jq4po2it4AX_Iju9A&_nc_ht=scontent.fktm10-1.fna&oh=a13cd25400cdbe6c2caae20e1d581ec1&oe=6035586A" alt="card image"></p>
                                    <h4 class="card-title">Sri Store</h4>
                                    <p class="card-text">We are satistfied with the BCI work. They make my buisness grow level zero to top with digital marketing.</p>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sri Store</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://scontent.fktm10-1.fna.fbcdn.net/v/t1.0-9/134945180_100367428694808_8595038232442336303_n.jpg?_nc_cat=104&ccb=2&_nc_sid=09cbfe&_nc_ohc=wJUnkXPL1lAAX9cywNz&_nc_ht=scontent.fktm10-1.fna&oh=18fae38b65fb3a941e714f432a425224&oe=6033DE72" alt="card image"></p>
                                    <h4 class="card-title">Acqua Scaping</h4>
                                    <p class="card-text">Our first choise is always BCI for digitalizing our buisnees.</p>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            </div>
    </div>
</section>
<!-- Team -->


    <?php
  require('footer.php');
?>
</body>

</html>