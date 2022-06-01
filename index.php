<?php ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Catering Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php include_once 'header.php'; ?>
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="blur">
        <div class="col-12 text-center">
          <h1 class="fw-bold headerText">Deliciousness in a Box.</h1>
          <p class="lead headerText">What can we bake you today?</p>
          <div class="button">
            <button type="button" class="btn btn-primary btn-lg btns" data-bs-toggle="modal" data-bs-target="#cateringModal">Start Your Order</button>
          </div>
      </div>
    </div>
    </div>
  </div>
</header>

<!-- Modal -->
<div class="modal fade" id="cateringModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Catering Options</h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <!-- Add more modal-split divs to create more pages -->
      <div class="modal-body">
        <div class="modal-split">1</div>
		    <div class="modal-split">2</div>
        <div class="modal-split">3</div>
        <div class="modal-split">4</div>
        <div class="modal-split">5</div>
        <div class="modal-split">6</div>
        <div class="modal-split">7</div>
        <div class="modal-split">8</div>
        <div class="modal-split">9</div>
      </div>
      <div class="modal-footer">
 <!--Nothing Goes Here but is needed! -->
      </div>
    </div>
  </div>
</div>


  </body>

  <!--Multi-page modal script -->
  <script src="/js/script.js"></script>
  <?php include_once 'footer.php';?>
</html>
