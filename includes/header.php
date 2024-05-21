<?php 
$SITESETTING= selectdatabyid('gard_sitesettings','1');
?>

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span><?php echo $SITESETTING['phone1'];?></span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span><?php echo $SITESETTING['email'];?></span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href="<?php echo $SITESETTING['fb'];?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href="<?php echo $SITESETTING['tw'];?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href="<?php echo $SITESETTING['linkedin'];?>"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="<?php echo $SITESETTING['insta'];?>"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <style>
    .nav-item.nav-link.active {
        color: blue !important;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navLinks = document.querySelectorAll(".nav-item.nav-link");

        navLinks.forEach(function(navLink) {
            navLink.addEventListener("click", function() {
                navLinks.forEach(function(link) {
                    link.classList.remove("active");
                });
                this.classList.add("active");
            });
        });
    });
</script>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0"><img src="admin/uploads/<?php echo $SITESETTING['logo'];?>"></h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="service.php" class="nav-item nav-link">Services</a>
            <a href="project.php" class="nav-item nav-link">Products</a>
            <a href="team.php" class="nav-item nav-link">Our Team</a>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
        </div>
        <a href="contact.php" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->

