<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="新しい形の国際交流アプリ" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://hotjapanse.com/LP/" />
<meta property="og:image" content="./images/facebook.png" />
<meta property="og:site_name" content="compadre" />
<meta property="og:description" content="A platform for connecting people who want to exchange internationally" />
<meta name="description" content="Compadre is a platform for connecting people who want to exchange internationally. It connects people who are passionate about various purposes.">


<meta name="google" content="notranslate" />
    <title>compadre.inc</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
    <link rel="icon" href="./images/favicon.ico">

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

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131756262-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131756262-2');
</script>



  </head>
  <body style="color:#EBB920;">
<div class="container">

  <div class="row">
    <div class="col-md-12">
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3" style="margin-top:5%; font-weight: bold; color: #ACB6E5; background: -webkit-linear-gradient(0deg, #1488cc, #2b32b2);-webkit-background-clip: text; -webkit-text-fill-color: transparent;">FREE right now if you Pre-registration</h4>
      <form class="needs-validation" novalidate method="POST" action="https://greenlion62.sakura.ne.jp/LP/actionen.php">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="state" placeholder="" value="" required name="firstName">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="state" placeholder="" value="" required name="lastName">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>


        <div class="mb-3">
          <label for="email">Email </label>
          <input type="email" class="form-control" id="state" placeholder="you@example.com" name="email" required>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Password</label>
          <input type="password" class="form-control" id="state" placeholder="" required name="password">
          <div class="invalid-feedback">
            Please enter make sure your Password.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Phone number </label>
          <input type="text" class="form-control" id="state" placeholder="Phone number" name="phoneNumber" required>
        </div>

        <div class="row">
        <div class="col-md-3 mb-3">
        <label for="state">day</label>
            <select class="custom-select d-block w-100" id="state" required name="day">
              <option value="0">Choose...</option>
              <script>
                var i;
                for (i=1; i < 32; i++ ){
                    document.write( '<option value=' + i + '>' + i + '</option>' );
                }
            </script>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">month</label>
            <select class="custom-select d-block w-100" id="state" required name="month">
              <option value="0">Choose...</option>
              <script>
                var i;
                for (i=1; i < 13; i++ ){
                    document.write( '<option value=' + i + '>' + i + '</option>' );
                }
            </script>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="country">birthday</label>
            <select class="custom-select d-block w-100" id="state" required name="birthday">
              <option >Choose...</option>
              <script>
                var i;
                for (i=1970; i < 2019; i++ ){
                    document.write( '<option value=' + i + '>' + i + '</option>' );
                }
            </script>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>


        </div>
        <hr class="mb-4">
        <h4 class="mb-3">Gender</h4>
        <div class="custom-control custom-checkbox">
        <select class="custom-select d-block w-100" id="state" required name="sex">
              <option value="0">Female</option>
              <option value="1">Male</option>
            </select>
        </div>
        <hr class="mb-4">

    

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">job</label>
            <input type="text" class="form-control" id="state" placeholder="your job" required name="job">
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Firstlanguage</label>
            <input type="text" class="form-control" id="state" placeholder="your language" required name="language">
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <label for="cc-number" style="color:red;">Please confirm that you have entered all and send</label>
        <button class="btn btn-primary btn-lg btn-block" type="submit" style="background-color:#22A9E4;" id="btn" >Sign Up</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; 2019 compadre. inc</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="https://hotjapanse.com/LP">Back to top</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

      
      
      </body>
</html>