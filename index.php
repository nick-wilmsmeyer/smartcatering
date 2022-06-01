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
        <!--Modal Page 1-->
        <div class="modal-split">
          <h2 class="fw-light">How many guests will be eating?</h2>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">1-5 Guests</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">6-10 Guests</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" checked>
            <label class="form-check-label" for="exampleRadios3">11-20 Guests</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
            <label class="form-check-label" for="exampleRadios4">21-50 Guests</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
            <label class="form-check-label" for="exampleRadios5">51-99 Guests</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option6">
            <label class="form-check-label" for="exampleRadios6">100+ Guests</label>
          </div>
          <div class="progress modalProgressPadding">
            <div class="progress-bar progress-bar-striped progress-bar-animated btns" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">20%</div>
          </div>
        </div>
        <!--Modal Page 2-->
		    <div class="modal-split">
          <h2 class="fw-light">When will the meal be served?</h2>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">Breakfast</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">Mid-Morning Snack</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
            <label class="form-check-label" for="exampleRadios3">Lunch</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
            <label class="form-check-label" for="exampleRadios4">Afternoon Snack</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
            <label class="form-check-label" for="exampleRadios5">Dinner</label>
          </div>
          <div class="progress modalProgressPadding">
            <div class="progress-bar progress-bar-striped progress-bar-animated btns" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%</div>
          </div>
        </div>
        <!--Modal Page 3-->
        <div class="modal-split">
          <h2 class="fw-light">Which items will be included in the Catering Bundle?</h2>
          <h4 class="fw-light">Check all that apply.</h2>
          <div class="container">
            <div class="row align-items-start">
              <div class="col">
                <ul class="list-unstyled">
                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">Hot Drinks</label>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">Cold Drinks</label>
                    </div>
                  </li>
                  <li>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">Sweets & Deserts</label>
                    </div>
                  </li>
                  <li>
                    <label class="form-check-label fw-bold">Breakfast</label>
                    <ul>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Wraps</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Sandwiches</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Souffles</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Bakery & Pastries</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Bagels</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Parfaits</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Fruit Bowls</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Oatmeal</label>
                        </div>
                      </li>
                    </li>
                  </ul>
              </div>
              <div class="col">
                <ul class="list-unstyled">
                  <li>
                    <label class="form-check-label fw-bold">Lunch & Dinner</label>
                    <ul>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Sandwiches</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Salads</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Soup</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Mac & Cheese</label>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <label class="form-check-label fw-bold">Snacks</label>
                    <ul>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Bakery & Pastries</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Fruit Bowls</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Sandwiches</label>
                        </div>
                      </li>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">Salads</label>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated btns" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
          </div>
        </div>
        <!--Modal Page 4-->
        <!--Modal Page 5-->
        <div class="modal-split">
          <h2 class="fw-light">Specific food requests</h2>
          <h4 class="fw-light">Check all that apply.</h4>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated btns" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
          </div>
        </div>
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
