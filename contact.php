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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
                                    <a href="">Book an appointment</a>
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
                                        <form class="row g-3">
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
                                                    placeholder="Eg : 634816161" />
                                            </div>
                                            <div class="col-12">
                                                <label for="age" class="form-label">Age*</label>
                                                <input type="text" class="form-control" id="age" placeholder="Eg : 22"
                                                    name="age">
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

        <!-- Modal -->
        <div class=" fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

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
                                    <form class="row g-3">
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
                                                placeholder="Eg : 634816161" />
                                        </div>
                                        <div class="col-12">
                                            <label for="age" class="form-label">Age*</label>
                                            <input type="text" class="form-control" id="age" placeholder="Eg : 22"
                                                name="age">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include './includes/footer.php' ?>
        <!-- Footer links -->
        <?php include './includes/footer-links.php' ?>
    </body>


    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Launch demo modal
                                    </button>

</html>