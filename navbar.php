<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <title>Document</title>
    <style>
        :root {
    --green: #27ae60;
    --black: #2c2c54;
}

* {
    font-family: 'Nunito', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

*::selection {
    background: var(--green);
    color: #fff;
}

html {
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 6.5rem;
    scroll-behavior: smooth;
}

section {
    padding: 2rem 9%;
}

.btn {
    display: inline-block;
    margin-top: 1rem;
    background: var(--green);
    color: #fff;
    padding: .8rem 3rem;
    font-size: 1.7rem;
    text-align: center;
    cursor: pointer;
}

.btn:hover {
    background: var(--black);
}

.heading {
    text-align: center;
    color: var(--black);
    text-transform: uppercase;
    padding: 1rem;
    font-size: 4.5rem;
}

.heading span {
    color: var(--green);
    text-transform: uppercase;
}

.header-1 {
    background: #eee;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 9%;
   
    
}


.logo {
    color: var(--black);
    font-weight: bolder;
    font-size: 3.5rem;
}

.logo i {
    padding-right: .5rem;
    color: var(--green);
}

.header-1 .search-box-container {
    display: flex;
    height: 5rem;
}

.header-1 .search-box-container #search-box {
    height: 100%;
    width: 100%;
    padding: 1rem;
    font-size: 2rem;
    color: #333;
    border: .1rem solid rgba(0, 0, 0, .3);
    text-transform: none;
}


.header-1 .search-box-container label {
    height: 100%;
    width: 8rem;
    font-size: 3.5rem;
    line-height: 5rem;
    color: #fff;
    background: var(--green);
    text-align: center;
    cursor: pointer;
}

.header-1 .search-box-container label:hover {
    background: var(--black);
}

.header-2{
    background: #fff;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 9%;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    position: relative;
    height: 120px;
    width: 100%;
    margin-left: 20%;
  }
  .header-2.active {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 10000;

  }
  .header-2 .navbar  {
    display: inline-block;
    margin-left: 200px;
}

.header-2 .navbar ul {
    display: inline-block;
    margin-left: 200px;
}

.header-2 .navbar li  {
    padding: .5rem 1.5rem;
    font-size: 3rem;
    border-radius: .5rem;
    color: var(--black);
    display: inline-block;
   
}

.header-2 .navbar a:hover {
    background: var(--green);
    color: #fff;
    cursor: pointer;
}


.header-2 .icons a {
    font-size: 3.5rem;
    color: var(--black);
    padding-left: 1rem;
    cursor: pointer;
}

.header-2 .navbar a:hover {
    background: var(--green);
    color: #fff;
}
.header-2 .icons  {
    float: right;
}

.header-2 .icons a {
    font-size: 3.5rem;
    color: var(--black);
    padding-left: 1rem;
}

.header-2 .icons a:hover {
    color: var(--green);
}

.header-2 .icons a {
    font-size: 3.5rem;
    color: var(--black);
    padding-left: 1rem;
    transition: all 2s;
}

.header-2 .icons a:hover {
    color: var(--green);
    cursor: pointer;
}
        </style>

</head>
<body>
<header>
    <div class="header-1">
                 <a herf="#" class="logo"><i class="fas fa-shopping-basket"></i>E-Grocery</a>
                 <form action="" class="search-box-container">
                    <input type="search" id="search-box" placeholder="search here...?">
                    <label for="search-box" class="fas fa-search"></label>
                 </form>
            </div>
            <div class="header-2">
                <div id="menu-bar" class="fas fa-bars"></div>
                <nav class="navbar">
                <li class="list"><a href="home.php">Home</a></li>
                    <li  class="list"><a href="grocery.php">Grocery</a></li>
                    <li  class="list"><a href="junkfood.php">Snacks</a></li>
                    <li  class="list"><a href="stationary.php">Stationary</a></li>
                    <li  class="list"><a href="review.php">Review</a></li>
                    <li> <a href="cart.php" class="fas fa-shopping-cart"></a></li>
                    <li><a href="payment.php" class="fas fa-user"></a></li>
                </nav>
                <div class="icons">
                <li> <a href="cart.php" class="fas fa-shopping-cart"></a></li>
                    <li><a href="login.php" class="fas fa-user"></a></li>
                </div>
            </div>
    </header>
</body>
</html>