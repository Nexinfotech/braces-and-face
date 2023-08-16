<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Meta Tags -->
        <meta name="description" content="Welcome to my awesome website!">
        <meta name="keywords" content="awesome, website, cool, amazing">
        <title> Contact us | Braces & Face</title>
        <!-- Header links -->
        <?php include './includes/header-links.php' ?>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css"
            rel="stylesheet" />
    </head>

    <body>
        <!-- Navbar start  -->
        <?php include './includes/navbar.php' ?>
        <!-- Navbar end  -->

        <!-- This section is common in all pages  -->
        <!-- Contact us hero banner section start -->
        <section>
            <div class="common_hero_section">
                <div class="container py-lg-5 py-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="common_hero_heading">
                                <h2>Contact Us</h2>
                                <!-- <p>Best, highly qualified clinicians who understand dentistry with holistic approach
                                </p> -->
                                <!-- <div class="book_btn_for_service_page">
                                    <a href="contact.php">Book an appointment</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- teeth animate vector -->
                <!-- <div class="about_vector_services">
                    <img src="./assets/img/common_teeth_vector.png" alt="" class="img-fluid" width="250">
                </div> -->
            </div>
        </section>
        <!-- Contact us hero banner section end -->

        <!-- contact us start  -->
        <section>
            <div>
                <div class="container py-md-5 py-2">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact_page">
                                <div class="left">
                                    <div class="left_heading">
                                        <h2>Contact us</h2>
                                        <p>Let us know how we can help you.</p>
                                    </div>
                                    <div class="left_num"> Call us at <a href="tel:+">1234567898</a></div>
                                </div>
                                <div class="right">
                                    <div class="contact_form">
                                        <form class="row company_form g-3">
                                            <div class="col-md-6">
                                                <label for="text" class="form-label">First name*</label>
                                                <input type="text" class="form-control" id="text" name="text"
                                                    placeholder="First name">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="text" class="form-label">Last name*</label>
                                                <input type="text" class="form-control" id="text" name="text"
                                                    placeholder="Last name">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Email Address*</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="email@email.com">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone" class="form-label">Phone number*</label>
                                                <input id="phone" type="tel" class="form-control" name="phone"
                                                    placeholder="Eg : 984816161"
                                                    onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" />
                                            </div>
                                            <div class="col-md-12">
                                                <label for="age" class="form-label">Age*</label>
                                                <input id="age" type="number" class="form-control" name="age"
                                                    placeholder="Your Age" />
                                            </div>
                                            <div class="col-md-12">
                                                <label for="condition" class="form-label">Current condition *</label>
                                                <select id="condition" class="form-select" name="condition">
                                                    <option selected>Eg : over bite etc</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="Gender" class="form-label">Gender*</label>
                                                <select id="Gender" class="form-select" name="Gender">
                                                    <option selected>Choose...</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Gay</option>
                                                    <option>Trans</option>
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck"
                                                        name="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        I can be contacted via WhatsApp
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit"
                                                    class="btn btn-primary contact_us_button">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact us end  -->

        <!-- Footer -->
        <?php include './includes/footer.php' ?>
        <!-- Footer links -->
        <?php include './includes/footer-links.php' ?>

        <!-- script for country code selection -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>
        <script>
            // -----Country Code Selection
            $("#phone").intlTelInput({
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
            });
        </script>
        <!-- <script>
            // -----Country Code Selection
            $("#phone").intlTelInput({
                initialCountry: "in",
                separateDialCode: true,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
            });
        </script> -->

    </body>

</html>