<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" />
  <!--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
   additional fonts for social media icons text if desired later: 
  
  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="number"] {
      background-color: rgba(220, 154, 254, 0.25);
      color: white;
    }

    input[type="text"]::placeholder,
    input[type="email"]::placeholder,
    input[type="password"]::placeholder,
    input[type="number"]::placeholder {
      color: white;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus,
    input[type="number"]:focus,
    input[type="text"]:hover,
    input[type="email"]:hover,
    input[type="password"]:hover,
    input[type="number"]:hover {
      background-color: rgba(220, 154, 254, 0.1);
    }

    body {
      background-color: rgb(168, 158, 255);
    }

    .text-primary {
      color: pink;
    }

    #logo {
      color: black;
    }

    .card {
      background-color: rgba(255, 106, 164, 90%);
    }

    .display-4 {
      color: white;
      font-size: 48px;
      font-weight: bold;
    }

    .btn {
      background-color: rgb(54, 39, 106);
      color: rgb(255, 106, 164);
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: rgba(54, 39, 106, .75) !important;
    }

    @keyframes rainbow {
      0% {
        color: red;
      }

      14% {
        color: orange;
      }

      28% {
        color: yellow;
      }

      42% {
        color: lime;
      }

      57% {
        color: blue;
      }

      71% {
        color: indigo;
      }

      85% {
        color: violet;
      }

      100% {
        color: red;
      }
    }
  </style>
</head>

<body>
  <header>
    <?php include('php/structure/top_navigation_bar.php'); ?>

    <section class="px-4 py-5 px-md-5 text-center text-lg-start">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <section class="logo">
              <img src="img/logo_square_1485x1485_tight_transparent1.png" alt="logo" id="logo" />

              <h1 class="my-5 display-3 fw-bold ls-tight">
                Join Now...<br />
                <span class="text-primary">Unlock <i style="animation: rainbow 20s linear infinite ;"><u>FREE</u></i> Membership Privileges!</span>
              </h1>
              <p style="color: black">
                You know you want to read those comments
              </p>
            </section>
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="display-4 fw-bold text-center mb-4">Sign Up Today!</h1>
            <div class="card" style="position: relative;">
              <div id="popup" style="display: none; width: 100%; height: 40px; background: rgba(255, 0, 0, 0.5); border: 1px solid black; padding: 10px; z-index: 1000; position: absolute; top: 0;">
                <p id="popupText" style="color: white;"></p>
              </div>
              <div class="card-body py-5 px-md-5">
                <form id="signUpForm" method="POST" action="php/content/processForm.php">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="firstName" class="form-control" name="firstName" placeholder="First Name" />
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="lastName" class="form-control" name="lastName" placeholder="Last Name" />
                      </div>
                    </div>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" name="email" placeholder="Email address" required />
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required />
                  </div>

                  <!-- Confirm Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="confirmPassword" class="form-control" name="confirmPassword" placeholder="Confirm Password" required />
                  </div>

                  <!-- Age input -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="number" id="age" class="form-control" name="age" min="13" max="100" placeholder="Age" required />
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-check">
                      </div>
                    </div>
                  </div>
                  <div class="form-check text-center">
                    <label class="form-check-label" for="newsletterSubscription" style="color: white; display: flex; align-items: center; justify-content: center; margin-top: 10px; padding-left:43px;">
                      <input class="form-check-input" type="checkbox" value="" id="newsletterSubscription" name="newsletterSubscription" onclick="this.style.backgroundColor = this.checked ? 'rgb(54, 39, 106)' : 'white';">
                      <span style="text-align: center; padding-left:10px;">Stay up to date with our e-mail newsletters!</span>
                    </label>
                  </div>
                  <!-- Terms and Conditions input -->
                  <div class="form-check text-center">

                    <label class="form-check-label" for="termsAndConditions" style="color: white; display: flex; align-items: center; justify-content: center; margin-top: 10px; cursor: help;" title="There are no terms and conditions">
                      <input class="form-check-input" type="checkbox" value="" id="termsAndConditions" name="termsAndConditions" required onclick="this.style.backgroundColor = this.checked ? 'rgb(54, 39, 106)' : 'white';">
                      <span style="text-align: center; padding-left:10px;">I agree to the Terms and Conditions</span>

                    </label>
                  </div>
                  </br>

                  <!-- Submit button -->
                  <button type="submit" id="submit" name="signUpSubmit" class="btn btn-primary btn-block mb-4">
                    Submit
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>

  <footer>
    <section class="footer-content">
      <?php include('php/structure/social_media_icons.html'); ?>
    </section>

    <section class="footer-bottom">
      <?php include('php/content/copyright_attribute.php'); ?>
    </section>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="JS/formValidation.js"></script>
  <script type="text/javascript" src="JS/signUp.js"></script>
</body>

</html>