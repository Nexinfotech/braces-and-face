<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Meta Tags -->
        <meta name="description" content="Welcome to my awesome website!">
        <meta name="keywords" content="awesome, website, cool, amazing">
        <title> Dental Implant | Braces & Face</title>
        <!-- Header links -->
        <?php include './includes/header-links.php' ?>
    </head>

    <body>
        <!-- Navbar start  -->
        <?php include './includes/navbar.php' ?>
        <!-- Navbar end  -->

        <!-- This section is common in all pages  -->
        <!-- Dental Implant  hero banner section start -->
        <section>
            <div class="common_hero_section">
                <div class="container py-lg-5 py-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="common_hero_heading">
                                <h2>Dental Implant </h2>
                                <p>Best, highly qualified clinicians who understand dentistry with holistic approach
                                </p>
                                <div class="book_btn_for_service_page">
                                    <a href="contact.php">Book an appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- teeth animate vector -->
                <div class="about_vector_services">
                    <img src="./assets/img/common_teeth_vector.png" alt="" class="img-fluid" width="250">
                </div>
            </div>
        </section>
        <!-- Dental Implant  hero banner section end -->



        <!-- full body section bg image -->
        <section class="f_b_img">

            <!-- common hero section for sevices pages -->
            <!-- common hero section start -->
            <section>
                <div class="pt-2 section-background">
                    <div class="container py-md-5 py-2">
                        <div class="row py-5">
                            <div class="col-md-10 m-auto order-1 order-md-0 order-lg-0">
                                <div class="service_section_heading">
                                    <h2>Dental Implant</h2>
                                </div>
                            </div>
                            <div class="col-md-7 order-2 order-lg-0 order-md-0">
                                <div class="common_hero_section_content">
                                    <div class="chsc_heading">
                                        <h2>Dental Implant</h2>
                                        <p>Our Dental Implant service is one of the best service:</p>
                                    </div>
                                    <div class="chsc_para">
                                        <p>A dental implant (also known as an endosseous implant or fixture) is a prosthesis that interfaces with the bone of the jaw or skull to support a dental prosthesis such as a crown, bridge, denture, or facial prosthesis or to act as an orthodontic anchor. The basis for modern dental implants is a biologic process called osseointegration, in which materials such as titanium or zirconia form an intimate bond to bone. The implant fixture is first placed so that it is likely to osseointegrate, then a dental prosthetic is added. A variable amount of healing time is required for osseointegration before either the dental prosthetic (a tooth, bridge or denture) is attached to the implant or an abutment is placed which will hold a dental prosthetic/crown.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-4 position-relative text-end order-0 ">
                                <span class="floating_sticker">
                                    <p>Our Dental Implant service is one of the best service:</p>
                                </span>
                                <img src="assets/img/s-implant.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- common hero section end -->

            <!-- common middle section start -->
            <?php include './includes/common-middle-section.php' ?>
            <!-- common middle section end -->

            <!-- before after section start -->
            <section>
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="client-review">
                                    <h2>
                                        BE INSPIRED BY SOME AMAZING
                                        SMILE TRANSFORMATIONS
                                    </h2>
                                    <div class="client-slide">
                                        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="carousel8">
                                            <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-2176px, 0px, 0px); transition: all 0.25s ease 0s; width: 4789px;">

                                        <div class="owl-item active" style="width: 425.333px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="client-image">
                                                    <img src="assets/img/teeth/ba-3.png" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 425.333px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="client-image">
                                                    <img src="assets/img/teeth/ba-2.png" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 425.333px; margin-right: 10px;">
                                            <div class="item">
                                                <div class="client-image">
                                                    <img src="assets/img/teeth/ba-1.png" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                    <div class="dent_btn m-0 m-auto w-50">
                                        <a href="">Book Your Free Appointment Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- before after section end -->

            <!-- Partnership section start -->
            <?php include './includes/partner.php' ?>
            <!-- Partnership section end -->

        </section>
        <!-- full body section bg image -->


        <!-- Footer -->
        <?php include './includes/footer.php' ?>
        <!-- Footer links -->
        <?php include './includes/footer-links.php' ?>
        <script>
            // owl carousel js
            $("#carousel8").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });
        </script>
    </body>

</html>