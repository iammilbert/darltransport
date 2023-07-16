<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'; ?>
<?php include 'header.php'; ?>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top">
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
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Career</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="vacancy.php" class="dropdown-item">Job Vacancy</a>
                        <a href="#" class="dropdown-item">Partnership</a>
                        
                    </div>
                </div>

                   <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Users</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="#" class="dropdown-item">Staff Login</a>
                        <a href="#" class="dropdown-item">Registration</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


   <!-- Service Start -->
    <div class="container-xxl py-5" >
        <div class="container ">
               <div class="text-center border-primary mb-5">
                <img src="img/vacancy-1.jpg" style="height: 300px; width: 100%" class="mb-5">

                <h2 class="font-weight-bold text-danger text-uppercase " id="about">LATEST JOB VACANCIES<h2>
                    <p style="font-size: 20px; font-family: Time New Roman" >Choose  YOur Career</p>

                </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow">
                    <div class="service-item p-4">
                            <li style="list-style: none; font-size: 15px;"><b>Job Title</b>  : <span> <a></a>PHP/Laravel Developer<span></li>
                            <li style="list-style: none; font-size: 15px;"><b>Date:</b> <span><?php echo date('Y-m-d'); ?><span></li>
                            <li style="list-style: none; font-size: 15px;"><b>Location  :</b>Abuja. </li>
                            <li style="list-style: none; font-size: 15px;" class="mb-2"><b>Company: </b> Darl Cloud-Soft & Engr.</li>
                            <h6>Job Summary</h6>
                                        
                        <p style="font-size: 13px;">As a Full Stack Developer, you should be comfortable around both front-end and back-end coding languages, development frameworks, and third-party libraries. You should also be a team player with a knack for visual design and utility. If you’re also familiar with Agile methodologies, we’d like to meet you.

                            <li style="font-size: 15px;"><b>Minimum Qualification :</b>  : <span><a></a> Degree<span></li>
                            <li style="font-size: 15px;"><b>Experience Level :</b> <span> Mid level<span></li>
                            <li style="font-size: 15px;" class="mb-2"><b>Experience Length: </b> 2 years</li>
                        </p> 
                        <a href="applicationForm.php" class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"> <i></i> Apply Now</i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow">
                    <div class="service-item p-4">
                            <li style="list-style: none; font-size: 15px;"><b>Job Title</b>  : <span><a></a>Mobile App Developer<span></li>
                            <li style="list-style: none; font-size: 15px;"><b>Date:</b> <span><?php echo date('Y-m-d'); ?><span></li>
                            <li style="list-style: none; font-size: 15px;"><b>Location  :</b> <a></a> Abuja</li>
                            <li style="list-style: none; font-size: 15px;" class="mb-2"><b>Company: </b> Darl Cloud-Soft & Engr.</li>
                            <h6>Job Summary</h6>
                                        
                        <p style="font-size: 13px;">As a Mobile Developer your responsibilities depend on the level of experience. Your primary duty is to create, maintain, and implement the source code to develop mobile apps and mobile platform programs that meet the needs and requirements of the clients using Flutter/Kotlin or any professional programming languages.

                            <li style="font-size: 15px;"><b>Minimum Qualification :</b>  : <span><I></I> Degree<span></li>
                            <li style="font-size: 15px;"><b>Experience Level :</b> <span> Mid level<span></li>
                            <li style="font-size: 15px;" class="mb-2"><b>Experience Length: </b> 3 years</li>
                        </p> 
                        <a href="applicationForm.php" class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"> <i></i> Apply Now</i></a>
                    </div>
                </div>
                 <div class="col-md-6 col-lg-4 wow">
                    <div class="service-item p-4">
                            <li style="list-style: none; font-size: 15px;"><b>Job Title</b>  : <span>Marketer<span></li>
                            <li style="list-style: none; font-size: 15px;"><b>Date:</b> <span><?php echo date('Y-m-d'); ?><span></li>
                            <li style="list-style: none; font-size: 15px;"><b>Location  :</b> Abuja</li>
                            <li style="list-style: none; font-size: 15px;" class="mb-2"><b>Company: Darl Cloud-Soft & Engr.</b>
                            <h6>Job Summary</h6>
                                        
                        <p style="font-size: 13px;">As a Marketer, you are responsible for working with other marketing staff to develop unique campaign ideas to market a company’s products, services or overall brand identity. Your duties include completing market research to identify target audience demographics or reviewing previously successful marketing campaigns, working as part of a team to accomplish tasks by set deadlines and making adjustments throughout marketing campaigns to achieve better engagement from consumers.

                            <li style="font-size: 15px;"><b>Minimum Qualification :</b>  : <span><I></I> Degree<span></li>
                            <li style="font-size: 15px;"><b>Experience Level :</b> <span> Mid level<span></li>
                            <li style="font-size: 15px;" class="mb-2"><b>Experience Length: </b>1+ Years</li>
                        </p> 
                        <a href="applicationForm.php" class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"> <i></i> Apply Now</i></a>
                    </div>
                </div>      
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Service Start -->
    <div class="container-xxl py-5" >
        <div class="container ">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow">
                    <div class="service-item p-4">
                            <li style="list-style: none; font-size: 15px;"><b>Job Title</b>  : <span><a></a>Marketer<span></li>
                            <li style="list-style: none; font-size: 15px;"><b>Date:</b> <span><?php echo date('Y-m-d'); ?><span></li>
                            <li style="list-style: none; font-size: 15px;"><b>Location  :</b> <a></a> Jikwoyi Road, Karu, Abuja</li>
                            <li style="list-style: none; font-size: 15px;" class="mb-2"><b>Company: </b> Darl Darl Distributors.</li>
                            <h6>Job Summary</h6>
                                        
                        <p style="font-size: 13px;">you are to Promotes the organization's products and services. Then figure out the strategies that can boost sales and revenue while ensuring these strategies are aligned with the needs of the customers as well as the market demand.

                            <li style="font-size: 15px;"><b>Minimum Qualification :</b>  : <span><I></I> Degree<span></li>
                            <li style="font-size: 15px;"><b>Experience Level :</b> <span> Mid level<span></li>
                            <li style="font-size: 15px;" class="mb-2"><b>Experience Length: </b> 2 years</li>
                        </p> 
                        <a href="applicationForm.php" class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"> <i></i> Apply Now</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


       <!-- Team Start -->
    <div class="container-xxl py-4">
        <div class="container py-4">
            <div class="text-center wow">
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