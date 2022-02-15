<?php
$title = 'hospital' ;
include_once "header.php";

if ($_POST) {
  $_SESSION['phone'] = $_POST['phone']  ;
  $errors = [];
  if (empty($_POST['phone'])) {
      $errors['phone'] =  "<div class='alert alert-danger'>User Phone is required </div>";
  } 
  else{
    header('location:review.php') ;die;
  }
}
?>

<h1 class="text-primary bg-light m-5 w-25 mx-auto  text-center font-weight-bold p-4" >Hospital</h1>
      <div  class="d-flex justify-content-between m-5 " >
  <div id="carouselExampleSlidesOnly" class="carousel slide w-50"  data-interval="1200" data-ride="carousel">
  <div class="carousel-inner  carousel-fade hidden-phone">
    <div class="carousel-item active">
      <img class="d-block w-100" height="500px" src="images/hospital-building-modern-parking-lot-59693686.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " height="500px" src="images/1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " height="500px" src="images/doctor.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " height="500px" src="images/room.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " height="500px" src="images/3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " height="500px" src="images/4.jpg" alt="Third slide">
    </div>
  </div>
</div>

<form action=""  class="w-25 m-auto mt-5" method="post">
    <div class="form-group">
      <label class="text-primary  font-weight-bold m-1">Phone number</label>
      <input type="number" name="phone" id=""  class="form-control" placeholder="" aria-describedby="helpId">
  <?php
            if (!empty($errors['phone'])) {
                echo $errors['phone'];
            } ?> 
  </div>
    <div class="m-auto col-3 form-group">
            <button class="btn btn-outline-primary "> Submit </button>
        </div>
</form>
      </div>
   
      <?php
include_once "script.php";
?>
