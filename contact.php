<?php
    require('header.php');

?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">Connectons-nous</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, perferendis?</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->
<!--  Contact START  -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-12">
                <div class="mb-5">
                    <h2 class="mb-2">Connectons-nous</h2>
                    <p>Have a project on mind,want to make an consultant. Don't hesistate to contact us.Let's have atalk together.Colaborat eyour project to done quickly</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <form class="contact__form" method="post" action="mail.php">
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <input name="subject" type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="col-12 form-group">
                            <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <input name="submit" type="submit" class=" btn btn-hero btn-circled" value="Envoyer">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5 pl-4 mt-4 mt-lg-0">
                <h4>Localisation</h4>
                <p class="mb-3">Bordj Bou Arreridj, Algerie</p>
                <h4>Téléphone </h4>
                <p class="mb-3">+213 661 75 11 50</p>
                <h4>Mail</h4>
                <p class="mb-3">contact@avismed.net</p>
                <h4>Site Web</h4>
                <p>www.avismed.net</p>
            </div>
        </div>
    </div>
</section>
<!--  CONTACT END  -->

<!--  Google Map START  -->
<section class="section-padding "> <!-- id="map" -->
    <div class="container">
        <div class="row">
            <!--  <div class="col-lg-12 col-sm-6 col-md-3">                
            </div> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3225.009086640584!2d4.749503653964411!3d36.068882452329866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128cbdc30728c0e9%3A0x478b45dcfc2abc6c!2sDr.%20AMMARI%20Liamine!5e0!3m2!1sen!2sdz!4v1691177307058!5m2!1sen!2sdz" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>
<!--  Google Map END  -->

<!--  FOOTER AREA START  -->
<?php
    require('footer.php');
?>
<!--  FOOTER AREA END  -->