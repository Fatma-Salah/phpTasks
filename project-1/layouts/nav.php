
<nav   class="navbar navbar-expand-lg navbar-light bg-dark ">
  <div  class="container-fluid">
    <a class="navbar-brand text-white pr-5" href="home.php">Ecommerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="home.php">Home</a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>
    
            <?php  if(isset($_SESSION['user'])){ ?>
              <li class="nav-item dropdown  ">
                    <a class="btn btn-outline-success ml-4 text-success nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION['user'] ->name  ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="logout.php">Log out</a>
                        <a class="dropdown-item" href="profile.php">Profile</a>
                    </div>
                </li>
              <?php }

              else{  ?>
              
                <li class="nav-item dropdown  ">
                    <a class="btn btn-outline-success ml-4 text-success nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Welcome 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="login.php">Login</a>
                        <a class="dropdown-item" href="register.php">Register</a>
                    </div>
                </li>

               <?php } ?>
    </div>
</ul>
  </div>
</nav>
