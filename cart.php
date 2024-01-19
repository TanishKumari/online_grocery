<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
<link rel="stylesheet" href="./cart.css">
    <title>Document</title>
</head>
<body>
    <section class="h-100 h-custom" style="background-color: #eee; margin-buttom:100px">
        <div class="container h-100 py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card shopping-cart" style="border-radius: 15px;">
                <div class="card-body text-black">
      
                  <div class="row">
                    <div class="col-lg-6 px-5 py-4">
      
                      <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your products</h3>
      
                      <div class="d-flex align-items-center mb-5">
                        <div class="flex-shrink-0">
                          <img src="./chana.jpg"
                            class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                          <div class="d-flex align-items-center">
                            <p class="fw-bold mb-0 me-5 pe-3">799</p>
                            <div class="def-number-input number-input safari_only">
                              <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                class="minus"></button>
                              <input class="quantity fw-bold text-black" min="0" name="quantity" value="1"
                                type="number">
                              <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                class="plus"></button>
                            </div>
                          </div>
                        </div>
                      </div>
      
                      <div class="d-flex align-items-center mb-5">
                        <div class="flex-shrink-0">
                          <img src="cake.jpeg"
                            class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                          <div class="d-flex align-items-center">
                            <p class="fw-bold mb-0 me-5 pe-3">239</p>
                            <div class="def-number-input number-input safari_only">
                              <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                class="minus"></button>
                              <input class="quantity fw-bold text-black" min="0" name="quantity" value="1"
                                type="number">
                              <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                class="plus"></button>
                            </div>
                          </div>
                        </div>
                      </div>
      
                      <div class="d-flex align-items-center mb-5">
                        <div class="flex-shrink-0">
                          <img src="./coldring.jpg"
                            class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <a href="#!" class="float-end text-black"><i class="fas fa-times"></i></a>
                          
                       
                          <div class="d-flex align-items-center">
                            <p class="fw-bold mb-0 me-5 pe-3">659</p>
                            <div class="def-number-input number-input safari_only">
                              <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                class="minus"></button>
                              <input class="quantity fw-bold text-black" min="0" name="quantity" value="2"
                                type="number">
                              <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                class="plus"></button>
                            </div>
                          </div>
                        </div>
                      </div>
      
                      <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">
      
                      <div class="d-flex justify-content-between px-x">
                        <p class="fw-bold">Discount:</p>
                        <p class="fw-bold">95$</p>
                      </div>
                      <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                        <h5 class="fw-bold mb-0">Total:</h5>
                        <h5 class="fw-bold mb-0">2261</h5>
                      </div>
      
                    </div>
                    
                  </div>
                  
                </div>
              </div>
             
            </div>
          </div>
        </div>
        <h5 class="fw-bold mb-10" style="position: absolute; margin-left:300px ;margin-top:80px"> <br><br><br>
                        <a href="home.php"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
                        </h5>
      </section>
</body>
</html>