<section style=" background: #0DAE9E;">
    <header>
        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-md-12 col-lg-9 m-auto">
                    <div class="top-header">
                        <div class="header_time">
                            <span><i class="fa-solid fa-clock" style="color: #ffffff;"></i> &nbsp; Monday to Friday
                                &nbsp; &nbsp; 8Am &nbsp; - &nbsp; 9PM</span>
                        </div>
                        <div class="header_location">
                            <i class="fa-solid fa-phone" style="color: #ffffff;"></i> &nbsp; +91 95162 85162
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top header end here -->
        <!-- main header start here  -->
        <nav class="navbar navbar-expand-xl navbar-light nav_bg p-0">
            <div class="container py-2">
                <a href="index.php" class="navbar-brand">
                    <img src="assets/img/logo.png" class="img-fluid header_lgo" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end nav_bg" id="navbarOffcanvas" tabindex="-1"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        close sidebar
                        <button type="button" class="btn-close  text-dark" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="navbar-nav navBarLinks">
                            <a class="nav-item nav-link " aria-current="page" href="index.php"> <i
                                    class="fa-solid fa-house d-lg-none d-md-none d-block"></i> &nbsp; Home</a>
                            <a class="nav-item nav-link" href="about.php"> <i
                                    class="fa-solid fa-address-card d-lg-none d-md-none d-block"></i> &nbsp; About
                                us</a>
                            <a class="nav-item nav-link" href="blog.php"> <i
                                    class="fa-solid fa-newspaper d-lg-none d-md-none d-block"></i> &nbsp; Blogs</a>
                            <a class="nav-item nav-link" href="why-c-us.php"> <i
                                    class="fa-solid fa-magnifying-glass d-lg-none d-md-none d-block"></i> &nbsp; Why
                                Choose
                                us</a>
                            <a class="nav-item nav-link" href="team.php"> <i
                                    class="fa-solid fa-people-group d-lg-none d-md-none d-block"></i> &nbsp; Meet Our
                                Team </a>
                            <a class="nav-item nav-link" href="contact.php">
                                <div class="contact_btn"><i class="fa-solid fa-phone"></i>
                                    &nbsp; Contact Us</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- main header end here  -->
    </header>

    <!-- script navbar -->
    <script>
        // Get all navigation links
        const navLinks = document.querySelectorAll('.nav-link');

        // Add click event listeners to each link
        navLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                // Remove 'active' class from all links
                navLinks.forEach(link => link.classList.remove('active'));

                // Add 'active' class to the clicked link
                this.classList.add('active');
            });
        });


    </script>
    <!-- script navbar -->
</section>