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
                <h2 class="font-weight-bold text-danger text-uppercase " id="about">APPLICATION FORM<h2>
                    <p style="font-size: 20px; font-family: Time New Roman" >Kindly Fill the form below</p>

                </div>
            <div class="row g-6">
     <form class="row g-3 needs-validation" novalidate method="POST" action="https://formspree.io/f/xeqwgkvr">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name <b class="text-danger">*</b></label>
    <input type="text" class="form-control" id="validationCustom01" aria-describedby="validationCustom01" name="firstName" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Please Enter First name.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name <b class="text-danger">*</b></label>
    <input type="text" class="form-control" id="validationCustom02" class="lastName" required>
    <div class="valid-feedback">
      Looks good!
    </div>
        <div class="invalid-feedback">
      Please Enter Last name.
    </div>
  </div>
  <div class="col-md-4">
    <label  class="form-label">Middle name</label>
    <input type="text" class="form-control" name="middleName">
  </div>
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Position Applying for <b class="text-danger">*</b></label>
    <select class="form-select" id="validationCustom03" required name="position">
      <option selected disabled value="">Choose...</option>
      <option value="Marketing">Marketing</option>
       <option value="Full Stack Developer">Full Stack Developer</option>
        <option value="Online Dispatcher">Online Dispatcher</option>
    </select>
    <div class="invalid-feedback">
      Please select Position.
    </div>
     <div class="valid-feedback">
      Looks good!
    </div>
  </div>
    <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Employer <b class="text-danger">*</b></label>
    <select class="form-select" id="validationCustom04" required name="employer">
      <option selected disabled value="">Choose...</option>
      <option value="Darl Distributors">Darl Distributors</option>
       <option value="Darl Cloud-Soft">Darl Cloud-Soft</option>
       <option value="Darl Dispatch">Darl Dispatch</option>
       <option value="Clinton Industries">Clinton Industries</option>
    </select>
    <div class="invalid-feedback">
      Please select one Employee.
    </div>
     <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Phone number <b class="text-danger">*</b></label>
    <div class="input-group has-validation">
      <span class="input-group-text"><i class="fa fa-telephone"></i> </span>
      <input type="mobile" class="form-control" id="validationCustom05" aria-describedby="validationCustom05" required name="tel">
      <div class="invalid-feedback">
        Please provide phone number.
      </div>
       <div class="valid-feedback">
      Looks good!
    </div>
    </div>
  </div>

  <div class="col-md-3">
    <label for="validationCustom06" class="form-label">State of Resident <b class="text-danger">*</b></label>
    <select class="form-select" id="validationCustom06" required name="state">
      <option selected disabled value="">Choose...</option>
      <option value="Abuja">Abuja</option>
      <option value="Kaduna">Kaduna</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
     <div class="valid-feedback">
      Looks good!
    </div>
  </div>
   <div class="col-md-3">
    <label for="validationCustom07" class="form-label">Residential Address <b class="text-danger">*</b></label>
      <input type="location" class="form-control" id="validationCustom07" aria-describedby="validationCustom07" required name="residentialAddress">
       <input type="hidden" class="form-control" name="dateApplied" value="<?php echo date('Y-m-d'); ?>">
        <input type="hidden" class="form-control" name="timeApplied" value="<?php echo date('h:i:s'); ?>">
    <div class="invalid-feedback">
      Enter Address.
    </div>
     <div class="valid-feedback">
      Looks good!
    </div>
  </div>
   <div class="col-md-3">
    <label for="validationCustom08" class="form-label">email <b class="text-danger">*</b></label>
   <input type="email" class="form-control" id="validationCustom08" aria-describedby="validationCustom08" required name="email">
    <div class="invalid-feedback">
      Please provide email
    </div>
     <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom09" class="form-label">Resume (Pdf only)<b class="text-danger">*</b></label>
    <input type="file" class="form-control" id="validationCustom09" class="resume" required>
    <div class="valid-feedback">
      Looks good!
    </div>
      <div class="invalid-feedback">
      upload resume.
    </div>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label text-black" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">Submit Application</button>
  </div>
</form>
            </div>
        </div>
    </div>
    <!-- Service End -->


<script type="text/javascript">
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

   


   <?php include 'footer.php'; ?>
</body>

</html>