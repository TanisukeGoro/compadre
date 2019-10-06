<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>compadre.inc</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      input[type="text"] {
  border: 1px solid #EBB920;
  outline: 0;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.css" rel="stylesheet">
  </head>
  <body style="color:#EBB920;">
<div class="container">

  <div class="row">
    <div class="col-md-12">
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3" style="margin-top:5%; font-weight: bold; color: #ACB6E5; background: -webkit-linear-gradient(0deg, #1488cc, #2b32b2);-webkit-background-clip: text; -webkit-text-fill-color: transparent;">FREE right now if you Pre-registration</h4>
      <form class="needs-validation" novalidate method="POST" action="action.php">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <h4 class="mb-3">Payment</h4>
            <input type="hidden" class="form-control" id="firstName" placeholder="" value="" required name="firstName">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <h4 class="mb-3">Payment</h4>
            <input type="hidden" class="form-control" id="lastName" placeholder="" value="" required name="lastName">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>


        <div class="mb-3">
          <label for="email">Email </label>
          <h4 class="mb-3">Payment</h4>
          <input type="hidden" class="form-control" id="email" placeholder="you@example.com" name="email">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Password</label>
          <input type="hidden" class="form-control" id="address" placeholder="" required name="password">
          <div class="invalid-feedback">
            Please enter make sure your Password.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Phone number </label>
          <h4 class="mb-3">Payment</h4>
          <input type="hidden" class="form-control" id="address2" placeholder="Phone number" name="phoneNumber">
        </div>

        <div class="row">
        <div class="col-md-3 mb-3">
        <label for="state">day</label>
            <select class="custom-select d-block w-100" id="state" required name="day">
              <option value="">Choose...</option>
              <option>California</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">month</label>
            <select class="custom-select d-block w-100" id="state" required name="month">
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="country">birthday</label>
            <select class="custom-select d-block w-100" id="country" required name="birthday">
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>


        </div>
        <hr class="mb-4">
        <h4 class="mb-3">Gender</h4>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address" name="female">
          <label class="custom-control-label" for="same-address">Female</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info" name="male">
          <label class="custom-control-label" for="save-info">Male</label>
        </div>
        <hr class="mb-4">

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">job</label>
            <h4 class="mb-3">Payment</h4>
            <input type="hidden" class="form-control" id="cc-name" placeholder="student" required name="job">
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Firstlanguage</label>
            <h4 class="mb-3">Payment</h4>
            <input type="hidden" class="form-control" id="cc-number" placeholder="english" required name="language">
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" style="background-color:#22A9E4;">Sign Up</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; 2019 compadre. inc</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="./indexen.php">Back to top</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
</html>