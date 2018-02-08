<!doctype html>
<?php include('config.php');?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Domain to sell</title>
  </head>
  <body>
  	<div class="container">
      <div class="py-5 text-center">
     	<h1>domain1.xxx</h1>
        <h2>You can buy this domain!</h2>
        <p class="lead">Please contact us, if you want to buy this domain name.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Our Domains</span>
            <span class="badge badge-secondary badge-pill"><?php echo count($aDomains) ?></span>
          </h4>
          <ul class="list-group mb-3">
	          <?php foreach ($aDomains as $sDomain) { ?>
	            <li class="list-group-item d-flex justify-content-between lh-condensed">
	              <div>
	                <h6 class="my-0"><?php echo $sDomain ?></h6>
	                <small class="text-muted">Special</small>
	              </div>
	              <span class="text-muted">to sell</span>
	            </li>
            <?php } ?>
          </ul>

        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Offer form:</h4>
          <form class="needs-validation" novalidate>
          	
          	<div class="mb-3">
              <label for="domain">Domain</label>
              <select class="custom-select" id="domain">´
              	<?php foreach ($aDomains as $sDomain) { ?>
				  <option vaue="<?php echo htmlentities($sDomain) ?>"><?php echo $sDomain ?></option>
				 <?php } ?>
				</select>
            </div>
 
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>
            
            <div class="mb-3">
                <label for="comment">Comment</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="input-group mb-3">
				<input type="text" class="form-control" id="offer" placeholder="Your offer">
				<div class="input-group-append">
					<span class="input-group-text">Euro</span>
				</div>
			  </div>
              
            

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; <?php echo date('Y') ?> <?php echo $sCompany ?></p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>