<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- -----------------CSS link-------------- -->
    <link rel="stylesheet" href="../style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" 
    crossorigin="anonymous">

     <!-- font awesome cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

   <style>
    .admin-image{
    width: 100px;
    object-fit: contain;
}
.footer{
    position:absolute;
    bottom: 0;
}
   </style>

</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- ------------second child------------------------ -->
        <div class="bg-light">
            <h3 class="text-center p-0">
                Manage details
            </h3>
        </div>
        <!-- ----------------------third child------------------ -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-item-center">
                <div class="p-3">
                    <a href="#" class="text-light text-center"><img src="../images/logo.jpg" alt="" class="admin-image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <!-- -------------button*10>a.nav-lin.text-light.bg-info.my-1 -->
                    <button class="my-3">
                        <a href="" class="nav-link text-light bg-info my-1">Insert Products</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">View Products</a>
                    </button>
                    <button>
                        <a href="?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">View Categories</a>
                    </button>
                    <button>
                        <a href="?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">View Brands</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">All Orders</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">User List</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">All payments</a>
                    </button>
                    <button>
                        <a href="" class="nav-link text-light bg-info my-1">Logout</a>
                    </button>
                </div>

            </div>
        </div>
        <!-- --------------fourth child ------------------- -->
        <div class="container my-5">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brands'])){
                include('insert_brands.php');
            }
            ?>
        </div>
        <!-- -------------last child------------ -->
        <div class="bg-info p-3 text-center footer">
            <p>All right reserved & Designed by Kartik Juneja</p>
        </div>
    </div>


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
    crossorigin="anonymous"></script>
</body>
</html>