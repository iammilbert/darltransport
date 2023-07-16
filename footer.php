 <?php
include 'config.php';
    if (isset($_POST['subscribe'])){
       $email = $_POST["email"];
       $date_sub = $_POST["date_sub"];
       $time_sub = $_POST["time_sub"];

       $select = "SELECT * FROM subscribers WHERE email = '".$email."' ";
        $query11 = mysqli_query($conn, $select) or die(mysqli_error($conn));
        $row = mysqli_fetch_assoc($query11);
            if ($row["email"]==$email) {
                echo '<script> alert("Email already exist!");</script>';
            }
            else{
           $query1 = "INSERT INTO subscribers (email, date_sub, time_sub) VALUES('$email', '$date_sub', '$time_sub')";
           $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn)); 
           if ($query1) {
             echo '<script> alert("Thanks for Subscribing to our Newsletter");</script>'; 
         }
         else {
            echo '<script> alert("Error Occured ! truy again");</script>';
            }
          }    
        }   
?>


    <script src="https://formspree.io/js/formbutton-v1.min.js" defer></script>
    <script>
      window.formbutton =
        window.formbutton ||
        function() {
          (formbutton.q = formbutton.q || []).push(arguments);
        };
      formbutton("create", {
        action:"https://formspree.io/f/xeqwgkvr",
        title: "Contact Us",
        fields: [
          {
            type: "text",
            label: "Name:",
            name: "name",
          },
          {
            type: "email",
            label: "Email:",
            name: "email",
          },
          {
            type: "text",
            label: "Address:",
            name: "address1",
          },
          {
            type: "text",
            label: "&nbsp;",
            name: "address2",
          },
          {
            type: "textarea",
            label: "Message:",
            name: "message",
          },
          {
            type: "checkbox",
            label: "Please send me your monthly newsletter",
            name: "_optin",
          },
          { type: "submit", value: "Send" }
        ],
        styles: {
          fontFamily: "Montserrat",
          modal: {
            border: "1px solid #6D6875",
            boxShadow: "6px 6px 0 #6D6875",
            borderRadius: "0",
          },
          title: {
            padding: "24px 24px 0px 24px",
            background: "rgba(0,0,0,0)",
            color: "#2e2a37",
            fontFamily: "Marcellus SC",
            fontSize: "2em",
          },
          body: {
              padding: "16px 24px 24px",
          },
          field: {
            display: "flex",
          },
          submitField: {
            justifyContent: "flex-end",            
          },
          label: {
            width: "40%",
          },
          checkboxLabel: {
            width: "auto",
          },
          input: {
            borderRight: "1px solid rgba(0,0,0,0.1)",
            borderBottom: "1px solid rgba(0,0,0,0.1)",
            borderRadius: "0px"
          },
          button: {
            background: "red",
            fill: "white",
            border: "1px solid #6D6875",
            boxShadow: "3px 3px 0px #6D6875"
          },
          closeButton: {
            textShadow: "0 0 0 #2e2a37",
          }
        },
        initiallyVisible: false
      });
    </script>

 <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-danger mb-2">Main Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>991 Burke ave, Bronx, NY. 10469.</p>
                    
                         <h4 class="text-danger mb-2">Branch Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>25 saint Dennis Dr,Toronto,Ontario.M3C1E6</p>
                    <a href="tel:+13473275398" target="_blank" style="font-weight: bolder; font-size: 13px;" class="mb-2"><i class="fa fa-phone-alt me-3"></i>+1 718 814 1725</a><br>
                    <a href="mailto:info@darldispatch.com" target="_blank" style="font-weight: bolder; font-size: 13px;" class="mb-2"><i class="fa fa-envelope me-3"></i>info@darltransport.com</a>
             
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                  <a href="airFreight.php" class="btn btn-link">Air Freight</a>
                        <a href="seaFreight.php" class="btn btn-link">Sea Freight</a>
                        <a href="ground.php" class="btn btn-link">Ground Shipping</a>
                        <a href="domestics.php" class="btn btn-link">Domestic Logistics</a>
                        <a href="warehouse.php" class="btn btn-link">Warehousing</a>
                        
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="services.php">Our Services</a>
                    <a class="btn btn-link" target="_blank" href="#">Login</a>
                    <a class="btn btn-link" target="_blank" href="#">Sign up</a>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="text-light mb-4">Subscribe Newsletter</h6>
                    <div class="position-relative mx-auto" style="max-width: 400px;">

                    <form method="POST">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" name="email" placeholder="Your email">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="hidden" name="date_sub" value="<?php echo date('Y-m-d'); ?>">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="hidden" name="time_sub" value="<?php echo date('h:i:s'); ?>">
                        <button type="submit" class="btn btn-info py-2 position-absolute top-0 end-0 mt-2 me-2" name="subscribe">Subcribe</button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-md-start mb-3 mb-md-0" style="font-size: 11px">
                        &copy; <a class="border-bottom" href="http://www.darldispatch.com/" style="font-size: 15px"> Darl Transport & Dispatch</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6  text-md-end">
                        Developed By <a class="border-bottom" href="#" target="_blank" style="font-size: 11px">Michael Gabriel</a>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <!--<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>-->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
   

    <!-- Template Javascript -->
    <script src="js/main.js"></script>