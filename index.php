<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tab</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" 
    crossorigin="anonymous">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- --------------css fil------ -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar bg-info navbar-light navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="images/logo.jpg" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Products</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Register</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Contact</a>
            </li>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            </li>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Total:100/-</a>
            </li>
            
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    <!-- ---------------------second child----------------- -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        
        
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Welcome Guest</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Login</a>
            </li>
        </ul>
        

    </nav>

    <!-- ------------third child--------------- -->
    <div class="bg-light">
        <h3 class="text-center">Fashion Store</h3>
        <p class="text-center">Latest trends are here to shop</p>
    </div>

    <!-- -------------fourth child-------------- -->
    <div class="row">
        <div class="col-md-10">
            <!-- -------------products----------- -->
            <!-- <h1>hello</h1> -->
            <div class="row">
                <div class="col-md-4 mb-4"><div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary bg-info">Add to cart</a>
    <a href="#" class="btn btn-primary bg-secondary">View more</a>
  </div>
</div></div>
                <div class="col-md-4 mb-4"><div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary bg-info">Add to cart</a>
    <a href="#" class="btn btn-primary bg-secondary">View more</a>
  </div>
</div></div>
                <div class="col-md-4 mb-4"><div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary bg-info">Add to cart</a>
    <a href="#" class="btn btn-primary bg-secondary">View more</a>
  </div>
</div>
</div>
<div class="col-md-4 mb-4"><div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary bg-info">Add to cart</a>
    <a href="#" class="btn btn-primary bg-secondary">View more</a>
  </div>
</div>
</div>
            </div>
        </div>
        <div class="col-md-2 bg-secondary p-0">
            <!-- -------------sidenav categories brands------------ -->
            <!-- -------------brands------------ -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light"><h4>Delivery brands</h4></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Brand1</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Brand2</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Brand3</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Brand4</a>
                </li>
            </ul>
            <!-- --------------------categories-------- -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Categories1</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Categories2</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Categories3</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Categories4</a>
                </li>
            </ul>
            
        </div>
        <!-- -------------last child------------ -->
        <div class="bg-info p-3 text-center">
            <p>All right reserved & Designed by Kartik Juneja</p>
        </div>
    </div>






   <!-- -----------bootstrap js link--------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
    crossorigin="anonymous"></script>
</body>
</html>