<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Our Mini Project 2 in Kodego</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">177 Fineza St. Brgy Lunsad Binangonan Rizal 1940 </span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">noniebacsal@yahoo.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">0917 514 8609</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="index.html"><img src="./images/school.png" height="50" width="50" class="chca img-fluid" alt=""></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <!-- <p class="button-custom order-lg-last mb-0"><a href="appointment.html" class="btn btn-secondary py-2 px-3">Make An Appointment</a></p> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="teacher.php" class="nav-link">Teacher</a></li>
	        	<li class="nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
	        	<li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
	        	<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Address</h3>
	            <p>177 Fineza St. Brgy Lunsad Binangonan Rizal 1940 </p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">
                0917 514 8609</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com">noniebacsal@yahoo.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">nic-dev.github.io</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
		
		<?php
// Function to get the next student ID
function getNextStudentId() {
    // Connect to the database
    $pdo = new PDO('mysql:host=localhost;dbname=jcytfchurch', 'root', '');

    // Retrieve the latest IDNO from the database
    $stmt = $pdo->query('SELECT IDNO FROM tblstudent ORDER BY IDNO DESC LIMIT 1');
    $latestId = $stmt->fetchColumn();

    // Add 1 to the latest ID for the next student
    $nextId = $latestId + 1;

    return $nextId;
}

// Assuming you have already established a database connection and retrieved the data into $row variable
include('connection.php');

$getData=mysqli_query($con, "select * from tblstudent where S_ID");
$row=mysqli_fetch_assoc($getData);
// Assign retrieved data to variables


?>
       

    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row justify-content-center"> <!-- Updated: Added justify-content-center -->
      <div class="col-md-12 py-5 px-md-5 bg-primary">
        <div class="heading-section heading-section-white ftco-animate mb-5">
          <h2 class="mb-4">Form to Enroll</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
			  <form id="submitstudent" onsubmit="submitForm()" enctype="multipart/form-data" action="submitstudent.php" method="POST">
              <div class="container">
                <div class="row">
                  <div class="col-md-8">
                    <h4>Student Picture</h4>
                    <input type="file" name="feature_image" id="feature_image" accept="image/*">
                  </div>
                  <div class="col-md-4">
                    <label for="academic_year">Academic Year: (Example : 2023-2024)</label>
                    <input class="form-control" id="academic_year" name="academic_year" placeholder="School year" type="text" value="">
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-6">
                    <label for="student_id">Id:</label>
                    <input readonly class="form-control" id="student_id" name="student_id" placeholder="Student Id" type="text" value="<?php echo getNextStudentId(); ?>">

                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-4">
                    <label for="first_name">Firstname:</label>
                    <input required class="form-control" id="first_name" name="first_name" placeholder="First Name" type="text" value="">
                  </div>
                  <div class="col-md-4">
                    <label for="last_name">Lastname:</label>
                    <input required class="form-control" id="last_name" name="last_name" placeholder="Last Name" type="text" value="">
                  </div>
                  <div class="col-md-2">
                    <label for="middle_initial">MI:</label>
                    <input class="form-control" id="middle_initial" name="middle_initial" placeholder="MI" type="text" value="">
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-12">
                    <label for="address">Address:</label>
                    <input required class="form-control" id="address" name="address" placeholder="Permanent Address" type="text" value="">
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-4">
                    <label>Sex:</label><br>
                    <label>
                      <input <?php echo $row['SEX'] === 'Female' ? 'checked' : ''; ?> id="female" name="gender" type="radio" value="Female"> Female
                    </label>
                    <label>
                      <input <?php echo $row['SEX'] === 'Male' ? 'checked' : ''; ?> id="male" name="gender" type="radio" value="Male"> Male
                    </label>
                  </div>
                  <div class="col-md-4">
                <label for="birthdate">Date of Birth: (YYYY/MM/DD)</label>
                <div class="input-group">
                  <input required name="birthdate" id="birthdate" type="text" class="form-control" value="<?php echo date('Y/m/d', strtotime($row['BDAY'])); ?>">
                </div>
              </div>

              <div class="col-md-4">
                <label for="age">Age:</label>
                <div class="input-group">
                  <?php
                    $birthdate = $row['BDAY'];
                    $age = date_diff(date_create($birthdate), date_create('today'))->y;
                  ?>
                  <input readonly name="age" id="age" type="text" class="form-control" value="<?php echo $age; ?> years old">
                </div>
              </div>

                </div>
                 
                <div class="row mt-3">
                  <div class="col-md-12">
                    <label for="birthplace">Place of Birth:</label>
                    <input required class="form-control" id="birthplace" name="birthplace" placeholder="Place of Birth" type="text" value="">
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-4">
                    <label for="nationality">Nationality:</label>
                    <input required class="form-control" id="nationality" name="nationality" placeholder="Nationality" type="text" value="">
                  </div>
                  <div class="col-md-4">
                    <label for="religion">Religion:</label>
                    <input required class="form-control" id="religion" name="religion" placeholder="Religion" type="text" value="">
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-6">
                    <label for="contact_number">Contact No.:</label>
                    <input required class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number" type="text" value="">
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-4">
                    <label for="course_year">Course/Year:</label>
                    <select class="form-control" name="course_year" id="course_year">
                      <option value="">Select</option>
                      <option value="1st Year">1st Year</option>
                      <option value="2nd Year">2nd Year</option>
                      <option value="3rd Year">3rd Year</option>
                      <option value="4th Year">4th Year</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="civil_status">Civil Status:</label>
                    <select class="form-control" name="civil_status" id="civil_status">
                      <option value="">Select</option>
                      <option value="Single">Single</option>
                      <option value="Married">Married</option>
                      <option value="Widow">Widow</option>
                    </select>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-4">
                    <label for="username">Username:</label>
                    <input required class="form-control" id="username" name="username" placeholder="Username" type="text" value="">
                  </div>
                  <div class="col-md-4">
                    <label for="password">Password:</label>
                    <input required class="form-control" id="password" name="password" placeholder="Password" type="password" value="">
                  </div>
                  <div class="col-md-4">
                    <label for="email">Email:</label>
                    <input required class="form-control" id="email" name="email" placeholder="Email" type="text" value="">
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-4">
                    <label for="guardian">Guardian:</label>
                    <input required class="form-control" id="guardian" name="guardian" placeholder="Parents/Guardian Name" type="text" value="">
                  </div>
                  <div class="col-md-4">
                    <label for="guardian_contact">Contact No.:</label>
                    <input required class="form-control" id="guardian_contact" name="guardian_contact" placeholder="Contact Number" type="text" value="">
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-12">
                    <input class="btn btn-success btn-lg mb-5" value="Submit" type="submit">
                  </div>
                </div>
              </div>
            </form>
			</div>
    </div>
  </div>
</section>

<script>
  document.getElementById('birthdate').addEventListener('input', function() {
  var birthdate = this.value;
  var age = Math.floor((new Date() - new Date(birthdate)) / (365.25 * 24 * 60 * 60 * 1000));
  document.getElementById('age').value = age + ' years old';

});

</script>

<iframe class="mt-3" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7545.86772429996!2d121.201806!3d14.456859000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c3493e2e5547%3A0xad47d41f6c58e955!2sLunsad%20Binangonan%20Rizal!5e1!3m2!1sen!2sph!4v1688173749175!5m2!1sen!2sph" width="2130" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">177 Fineza St. Brgy Lunsad Binangonan Rizal 1940</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0917 514 8609</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">noniebacsal@yahoo.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | The Collaboration of <i class="icon-heart" aria-hidden="true"></i> <a href="https://www.facebook.com/elementjuan/" target="_blank">Nico Lorenzo Cruz</a> and <a href="https://www.facebook.com/johnmark.rojas.52" target="_blank">John Mark Rojas</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>