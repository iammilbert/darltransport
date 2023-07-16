<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.html" class="navbar-brand d-flex px-lg-5 px-4">
             <img src="img/logo22.png" alt="Darl Transport & Dispatch Logo" style="height: 75px; width: 110px">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link"><b>Home</b></a>
                <a href="about.php" class="nav-item nav-link">About</a>
             <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="service.php" class="dropdown-item">Air Freight</a>
                        <a href="service.php" class="dropdown-item">Sea Freight</a>
                        <a href="service.php" class="dropdown-item">Road Shipping</a>
                        <a href="service.php" class="dropdown-item">Train Shipping</a>
                        <a href="service.php" class="dropdown-item">Domestic Logistics</a>
                        <a href="service.php" class="dropdown-item">Warehousing</a>
                        
                    </div>
                </div>

                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Career</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="#" class="dropdown-item">Job Vacancy</a>
                        <a href="#" class="dropdown-item">Partnership</a>
                        
                    </div>
                </div>

                   <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Users</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="vacancy.php" class="dropdown-item">Staff Login</a>
                        <a href="#" class="dropdown-item">Registration</a>
                        
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link active">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/contact-1.jpg" alt="Darl Transport & Dispatch" style="height: 500px">
                <div class="position-absolute top-0 start-0 w-100 h-100 align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                
                                <h1 class="text-white animated slideInDown" style="padding-top: 30%;"> <span class="text-primary">24/7</span> COMMUNICATION</h1>
                              
                                <h6 class="text-white mb-3 animated slideInDown">Enjoy the reach of Our Dispatchers...</h6>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item" style="font-weight: bold; font-size: 20px"><a href="index.php" class="text-danger" href="#">Home</a></li>
    <li class="breadcrumb-item text-white active" aria-current="page" style="font-weight: bold; font-size: 20px"><a href="contact.php" class="text-danger" href="contact.php">Contact us</a></li>
                                </ol>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->




    <!-- Quote Start -->
    <div class="container-xxl">
        <div class="container">
             <div class="text-center border-primary">
                    <h2 class="font-weight-bold text-secondary text-uppercase " id="contact">contact us</h2>
                    <p style="font-size: 20px; font-family: Time New Roman" >Make your request</p>
                </div>
            <div class="row g-5 align-items-center">

                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="font-weight-bold text-danger mb-5" id="about">24/7 Customer Service</h5>
                           <h6 class="text-danger mb-2">Main Office</h6>
                    <p class="mb-4"><i class="fa fa-map-marker-alt me-3"></i>991 Burke ave, Bronx, NY. 10469.</p>
                    
                     <h6 class="mb-2">Branch Office <i class="fa fa-building text-primary"></i></h6>
                    <p class="mb-5">25 saint Dennis Dr,Toronto,Ontario.M3C1E6</p>
                    <div class="d-flex align-items-center">
                       
                        <div class="font-weight-bold py-2">
                            <h6>Call us <i class="fa fa-headphones"></i></h6>
                            <a href="tel:+13473275398" style="font-weight: bolder;" class="text-secondary">+1 718 814 1725</a><br>
                             <a href="tel:+13473275398" style="font-weight: bolder;" class="text-secondary">+1 347 327 5398</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form method="POST" action="index.php">
                      <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="name" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" name="email" placeholder="Your Email" style="height: 55px;">

                                    <input type="hidden" class="form-control border-0" name="status" value="0">
                                     <input type="hidden" class="form-control border-0" name="date" value="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="tel" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" name="service">
                                        <option selected>Select A Freight</option>
                                        <option value="1">Air Freight</option>
                                        <option value="2">Road Freight</option>
                                        <option value="3"> Ocean Freight 3</option>
                                         <option value="3"> Domestics Logistics 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Message!" name="message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="contact">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
    

    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="text-secondary text-uppercase mb-3">Our Features</h4>
                    <h6 class="mb-5">We Are Trusted Logistics Company Since 1990</h6>
                    <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Worldwide Service</h5>
                           
                        </div>
                    </div>
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>On Time Delivery</h5>
                          
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-headphones text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>24/7 Telephone Support</h5>
                         
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <h4 class="text-secondary text-uppercase mb-3">Our Location <i class="fa fa-arrow-down text-primary" ></i></h4>
                    <div class="position-relative h-100">
                      <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=991 Burke ave, Bronx, NY. 10469&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->




       <!-- Team Start -->
    <div class="container-xxl py-4">
        <div class="container py-4">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="text-secondary text-uppercase">FOLLOW/SUBSCRIBE US ON</h4>
                <h6 class="mb-2">Professional ICT manager</h6>
            </div>
            <div class="row g-4">
                <div class="text-center wow">
                    <div class=" p-4">
                        <div class="overflow-hidden">
                             <a href="#" class="btn btn-primary" target="_blank" style="font-size:30px; background-color: darkred; border-color: orange"><i class="fab fa-instagram"></i></a>
                             <a href="#"class="btn btn-primary" target="_blank" style="font-size:30px; background-color: skyblue; border-color: skyblue"><i class="fab fa-twitter"></i></a>
                             <a href="#" class="btn btn-primary bg-info" target="_blank" style="font-size:30px;"><i class="fab fa-linkedin"></i></a>
                             <a href="#" class="btn btn-primary" target="_blank" style="font-size:30px; background-color: blue; border-color: blue"><i class="fab fa-facebook-f"></i></a>
                             <a href="#" class="btn btn-primary" target="_blank" style="font-size:30px;"><i class="fab fa-youtube"></i></a>
                              <a href="https://wa.me/+13473275398" target="_blank" class="btn btn-info" style="font-size:30px;"><i class="fab fa-whatsapp" style="color: white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



   


   <?php include 'footer.php'; ?>
</body>

</html>