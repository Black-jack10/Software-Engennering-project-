<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Application_Form</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">
    <link rel="stylesheet" href="Application Form.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    <?php
require "connect.php";
if (isset($_POST['submit'])){
  $firstname = $_POST['FirstName'];
  $lastName=$_POST['LastName'];
  $studentNumber=$_POST['StudentNumber'];
  $phoneNumber=$_POST['PhoneNumber'];
  $email=$_POST['Email'];
  $address=$_POST['Address'];
  $nationality=$_POST['Nationality'];
  $roomType=$_POST['RoomType'];
  $dateOfApplication=$_POST['DateOfApplication'];
  $roomNumber=$_POST['RoomNumber'];
  $blockName=$_POST['BlockName'];

  $query = $conn->query("insert into application_(Firstname_,Surname_,PhoneNumber_,Email_,StudentNumber_,Address_,Nationality_,RoomType_,DateOfAppl_,RoomNumber_,BlockName_) values('$firstname','$lastName',$phoneNumber,'$email',$studentNumber,'$address','$nationality','$roomType','$dateOfApplication',$roomNumber,'$blockName')");
  if($query){
    echo "registration successful";

  }
  else{
    echo "not successful";
  }
}
?>
  </head>

  <body class="bg-light">

      <!--navbar-->
<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">UNESWA ON-CAMP PORTAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav me-auto mb-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="source1.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.html">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="signin.html">Sign out</a>
          </li>
      </div>
    </div>
  </nav>
      <!-- Custom styles for this template -->
      <link href="../checkout/form-validation.css" rel="stylesheet">
    </head>
    <body class="bg-light">
      
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="University.png" alt="" width="72" height="57">
        <h2 class="text-muted">UNESWA ON-CAMP PORTAL
        <p class="lead text-muted">Apply for a place on our campus by filling in our form and chosing a block of your choice</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Room Expenditure</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Single room</h6>
                <small class="text-muted">An individual room, reqiures you to be in fourth  or final year</small>
              </div>
              <span class="text-muted">E25 a day</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Double room</h6>
                <small class="text-muted">A shared room , with two beds</small>
              </div>
              <span class="text-muted">E25 a day </span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
              <h6 class="my-0">Common room</h6>
                <small class="text-muted">A shared room with many individuals</small>
              </div>
              <span class="text-muted">E18 a day</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>

          <form class="card p-2" action="connect.php" method="post>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>-->

            </div>
          </form action="connect.php" method="post" >
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3 text-muted" >Application details</h4>
          <form class="needs-validation" novalidate method="post">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="FirstName" class="text-muted">First name</label>
                <input type="text" class="form-control" id="FirstName" name="FirstName">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="LastName" class="text-muted">Last Name</label>
                <input type="text" class="form-control" id="LastName" name="LastName">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Phone Number</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">+268</span>
                </div>
                <input type="tel" class="form-control" id="username" placeholder="Phone Number"  name="PhoneNumber">
                <div class="invalid-feedback" style="width: 100%;">
                 Phone Number is required
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="Email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Student ID</label>
              <input type="text" class="form-control" id="StudentId" placeholder="Student ID"  name="StudentNumber">
              <div class="invalid-feedback">
                Please enter your StudetntId.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address  <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" name="Address">
            </div>

           <!-- <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Next of kin</label>
                <select class="custom-select d-block w-100" id="country"  name="NextOfKin">
                  <option value="">Choose...</option>
                  <option>Parent</option>
                  <option>Guardian</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Relationship</label>
                <select class="custom-select d-block w-100" id="state"  name="Relationship">
                  <option value="">Choose...</option>
                  <option>Father</option>
                  <option>Mother</option>
                  <option>Uncle</option>
                  <option>Aunt</option>
                  <option>GrandFather</option>
                  <option>GrandMother</option>
                  <option>Other</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Next of Kin name </label>
                <input type="text" class="form-control" id="zip" placeholder="" name="NextOfKinName">
                <div class="invalid-feedback">
                  name is required.
                </div>
              </div>
            </div>-->

            <hr class="mb-4">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">International/National</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" name="Nationality">
                <small class="text-muted">Please  enter national or International student</small>
                <div class="invalid-feedback">
                 Nationality required
                </div>
              </div>
              
            </div>

            <hr class="mb-4">

        

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">RoomType</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" name="RoomType">
                <small class="text-muted">Please enter single,double or common rooom</small>
                <div class="invalid-feedback">
                  Date of Application required 
                </div>
              </div>
              
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Date of Application</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" name="DateOfApplication">
                <small class="text-muted">Please enter day, month and year</small>
                <div class="invalid-feedback">
                  Date of Application required 
                </div>
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Block name</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder=""  name="BlockName">
                <div class="invalid-feedback">
                  Block name required 
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">room number</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" name="RoomNumber">
                <div class="invalid-feedback">
               room number
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Submit All </button>
            <button class="btn btn-outline-success btn-lg btn-block" type="submit"><a href="signin.php">Back to logIn</a></button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
