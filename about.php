<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - BCI</title>

</head>

<body>
    <?php 

require('nav.php');
require('cardStyle.php');

?>


    <div class="container p-3 mt-3">

        <h4 class="text-center text-primary">About Us</h4>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
        </p>

        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>


    <div class="container">
        <h3 class="text-center text-primary">The Journey Of BCI</h3>

        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <div class="d-flex justify-content-center pb-3">
            <button class="btn btn-primary" id="more" onclick="Moretext()" type="button" data-bs-toggle="collapse"
                data-bs-target="#moretext" aria-controls="moretext" aria-label="Toggle navigation">
                Read More>>
            </button>

        </div>

        <div class="collapse" id="moretext">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>

    <!--Card Code -->


    <!-- Team -->
    <section id="team" class="pb-5">
        <div class="container">
            <h3 class="section-title">OUR AMAZING TEAM</h3>
            <div class="row">
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid"
                                                src="https://scontent.fktm10-1.fna.fbcdn.net/v/t1.0-0/c0.0.206.206a/p206x206/93423763_1024338227967393_6856761764458004480_o.jpg?_nc_cat=107&ccb=2&_nc_sid=da31f3&_nc_ohc=pleZy4xuhsUAX8b2J7b&_nc_oc=AQktiYsbNpO7vBU3tjdtjAbGbfL8dcesxwTkMAqVOX3byZ9PSKFQe8R7UEDv9WAw2MY&_nc_ht=scontent.fktm10-1.fna&tp=27&oh=94cd5c5b63de453d239193e74f4332d2&oe=60353537"
                                                alt="card image"></p>
                                        <h4 class="card-title">Rahul Kr. Shah</h4>
                                        <p class="card-text">Full Stack Developer</p>
                                        <a class="btn btn-primary btn-sm"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Rahul Kr. Shah</h4>
                                        <p class="card-text">This is basic card with image on top, title, description
                                            and button.This is basic card with image on top, title, description and
                                            button.This is basic card with image on top, title, description and button.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.facebook.com/skrahul1230">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
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
                                        <p><img class=" img-fluid"
                                                src="https://scontent.fktm10-1.fna.fbcdn.net/v/t1.0-9/122891260_693166037993201_8760893562255948959_n.jpg?_nc_cat=110&ccb=2&_nc_sid=174925&_nc_ohc=HYQFdevUO30AX8sWPds&_nc_ht=scontent.fktm10-1.fna&oh=5ed36f12d6851f77b9f067540166dd47&oe=60365763"
                                                alt="card image"></p>
                                        <h4 class="card-title">Khemraj Kr. Chaudhary</h4>
                                        <p class="card-text">Front End Develper / Content Writer</p>
                                        <a class="btn btn-primary btn-sm"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Khemraj Kr. Chaudhary</h4>
                                        <p class="card-text">This is basic card with image on top, title, description
                                            and button.This is basic card with image on top, title, description and
                                            button.This is basic card with image on top, title, description and button.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.facebook.com/khem754raj">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
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
                                        <p><img class=" img-fluid"
                                                src="https://scontent.fktm10-1.fna.fbcdn.net/v/t1.0-9/50104197_337834906812075_3912373941439561728_n.jpg?_nc_cat=109&ccb=2&_nc_sid=174925&_nc_ohc=i3IPKWk-o9oAX-GN7vm&_nc_ht=scontent.fktm10-1.fna&oh=bf41f741ab9cfdcf0146f98358ff0c32&oe=60367F27"
                                                alt="card image"></p>
                                        <h4 class="card-title">Sumit Kr. Malaha</h4>
                                        <p class="card-text">Back End Developer / Data Analyst</p>
                                        <a class="btn btn-primary btn-sm"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Sumit Kr. Malaha</h4>
                                        <p class="card-text">This is basic card with image on top, title, description
                                            and button.This is basic card with image on top, title, description and
                                            button.This is basic card with image on top, title, description and button.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.facebook.com/sumit.malaha">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
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
                                        <p><img class=" img-fluid"
                                                src="https://scontent.fktm10-1.fna.fbcdn.net/v/t1.0-9/137643221_402881357708176_9051593939132955844_n.jpg?_nc_cat=100&ccb=2&_nc_sid=09cbfe&_nc_ohc=fXAWNxsyae8AX-gVMqG&_nc_ht=scontent.fktm10-1.fna&oh=308ccea17b53964d71a7c40290743896&oe=6036CEB2"
                                                alt="card image"></p>
                                        <h4 class="card-title">Sonam Shah</h4>
                                        <p class="card-text">Content Writer / Graphics Designer</p>
                                        <a class="btn btn-primary btn-sm"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Sonam Shah</h4>
                                        <p class="card-text">This is basic card with image on top, title, description
                                            and button.This is basic card with image on top, title, description and
                                            button.This is basic card with image on top, title, description and button.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.facebook.com/sonam.sha.716">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
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
                                        <p><img class=" img-fluid"
                                                src="https://scontent.fktm10-1.fna.fbcdn.net/v/t1.0-9/138139346_862309131255479_5502888819490246059_o.jpg?_nc_cat=107&ccb=2&_nc_sid=09cbfe&_nc_ohc=gYkw5IfQsZsAX81Jz-5&_nc_ht=scontent.fktm10-1.fna&oh=ac2c76abbc11c6c2f2dd94492c44f14e&oe=6037275C"
                                                alt="card image"></p>
                                        <h4 class="card-title">Rohit Mahato</h4>
                                        <p class="card-text">Graphics Designer / Content Manager</p>
                                        <a class="btn btn-primary btn-sm"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Rohit Mahato</h4>
                                        <p class="card-text">This is basic card with image on top, title, description
                                            and button.This is basic card with image on top, title, description and
                                            button.This is basic card with image on top, title, description and button.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.facebook.com/profile.php?id=100024292008450">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
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
                                        <p><img class=" img-fluid"
                                                src="https://scontent.fktm10-1.fna.fbcdn.net/v/t1.0-9/49583206_101422467628445_452224017198219264_o.jpg?_nc_cat=100&ccb=2&_nc_sid=174925&_nc_ohc=X7pwk1bwWR0AX8QUcqi&_nc_ht=scontent.fktm10-1.fna&oh=4cd51143ea05427f464ac9d65d068306&oe=6035CA20"
                                                alt="card image"></p>
                                        <h4 class="card-title">Tinku Chaudhary</h4>
                                        <p class="card-text">Analyst / Vulnerability Tester</p>
                                        <a href="" class="btn btn-primary btn-sm"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Tinkuu chaudhary</h4>
                                        <p class="card-text">This is basic card with image on top, title, description
                                            and button.This is basic card with image on top, title, description and
                                            button.This is basic card with image on top, title, description and button.
                                        </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="https://www.facebook.com/tinku.chaudhary.587606">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank"
                                                    href="">
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