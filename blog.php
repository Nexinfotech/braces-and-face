<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Meta Tags -->
        <meta name="description" content="Welcome to my awesome website!">
        <meta name="keywords" content="awesome, website, cool, amazing">
        <title> blog | Braces & Face</title>
        <!-- Header links -->
        <?php include './includes/header-links.php' ?>
    </head>

    <body>
        <!-- Navbar start  -->
        <?php include './includes/navbar.php' ?>
        <!-- Navbar end  -->

        <!-- This section is common in all pages  -->
        <!-- blog hero banner section start -->
        <section>
            <div class="common_hero_section">
                <div class="container py-lg-5 py-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="common_hero_heading">
                                <h2>blog</h2>
                                <p>Best, highly qualified clinicians who understand dentistry with holistic approach
                                </p>
                                <div class="book_btn_for_service_page">
                                    <a href="">Book an appointment</a>
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
        <!-- blog hero banner section end -->



        <!-- full body section bg image -->
        <section class="f_b_img">

        </section>
        <!-- full body section bg image -->

        <!-- Footer -->
        <?php include './includes/footer.php' ?>
        <!-- Footer links -->
        <?php include './includes/footer-links.php' ?>
        <script>
            // owl carousel js
            $("#carouselt").owlCarousel({
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