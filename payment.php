<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="./payment.css">
    <title>Document</title>
</head>
<body>
    <div class="container py-5">

        <div class="row">
          <div class="col-lg-7 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5">
              <!-- Credit card form tabs -->
              <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                <li class="nav-item ">
                  <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill btn btn-success">
                                      <i class="fa fa-credit-card"></i>
                                      Credit Card
                                  </a>
                </li>
                <li class="nav-item">
                  <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
                                      <i class="fa fa-paypal"></i>
                                      Paypal
                                  </a>
                </li>
                <li class="nav-item">
                  <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                                      <i class="fa fa-university"></i>
                                       Bank Transfer
                                   </a>
                </li>
              </ul>
              <!-- End -->
      
      
              <!-- Credit card form content -->
              <div class="tab-content">
      
                <!-- credit card info-->
                <div id="nav-tab-card" class="tab-pane fade show active">
                  <p class="alert alert-success">Some text success or error</p>
                  <form role="form">
                    <div class="form-group">
                      <label for="username">Full name (on the card)</label>
                      <input type="text" name="username" placeholder="" required class="form-control">
                    </div>
                    <div class="form-group ">
                      <label for="cardNumber">Card number</label>
                      <div class="input-group">
                        <input type="text" name="cardNumber" placeholder="Your card number" class="form-control" required>
                        <div class="input-group-append">
                          <span class="input-group-text text-muted">
                                                      <i class="fa fa-cc-visa mx-1"></i>
                                                      <i class="fa fa-cc-amex mx-1"></i>
                                                      <i class="fa fa-cc-mastercard mx-1"></i>
                                                  </span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="form-group">
                          <label><span class="hidden-xs">Expiration</span></label>
                          <div class="input-group">
                            <input type="number" placeholder="MM" name="" class="form-control" required>
                            <input type="number" placeholder="YY" name="" class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group mb-4">
                          <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
                                                      <i class="fa fa-question-circle"></i>
                                                  </label>
                          <input type="text" required class="form-control">
                        </div>
                      </div>
      
      
      
                    </div>
                    <button type="button" class="subscribe btn btn-success btn-block rounded-pill shadow-sm"> Confirm  </button>
                  </form>
                </div>
                <!-- End -->
      
                <!-- Paypal info -->
                <div id="nav-tab-paypal" class="tab-pane fade">
                  <p>Paypal is easiest way to pay online</p>
                  <p>
                    <button type="button" class="btn btn-success rounded-pill"><i class="fa fa-paypal mr-2"></i> Log into my Paypal</button>
                  </p>
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <!-- End -->
      
                <!-- bank transfer info -->
                <div id="nav-tab-bank" class="tab-pane fade">
                  <h6>Bank account details</h6>
                  <dl>
                    <dt>Bank</dt>
                    <dd> THE WORLD BANK</dd>
                  </dl>
                  <dl>
                    <dt>Account number</dt>
                    <dd>7775877975</dd>
                  </dl>
                  <dl>
                    <dt>IBAN</dt>
                    <dd>CZ7775877975656</dd>
                  </dl>
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <!-- End -->
              </div>
              <!-- End -->
      
            </div>
          </div>
        </div>
      </div>
      <script src="./payment.js"></script>
</body>
</html>