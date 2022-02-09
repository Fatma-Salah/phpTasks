<?php

if ($_POST) {

  $number1 = $_POST["num1"];
  $number2 = $_POST["num2"];
  $number3 = $_POST["num3"];
  // if(($number1 == $number2) || ($number1 == $number3)|| ($number2 == $number3)|| ( ($number1 == $number2) && ($number3 == $number2)){

  if (($number1 >= $number2) && ($number1 >= $number3)) {
    $resultMax = $number1;
  } elseif ($number2 >= $number1 && $number2 >= $number3) {
    $resultMax = $number2;
  } elseif ($number3 >= $number2 && $number3 >= $number1) {
    $resultMax = $number3;
  } elseif ($number1 <= $number2 && $number1 <= $number3) {
    $resultMin = $number1;
  } elseif ($number2 <= $number1 && $number2 <= $number3) {
    $resultMin = $number2;
  } else {
    $resultMin = $number3;
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="contianer">
    <div class="row mt-5">
      <div class="col-12">
        <h1 class="text-center text-info">Compare numbers</h1>
      </div>
      <div class="col-4 offset-4">
        <form method="post">

          <div class="form-group">
            <label for=""></label>
            <input type="number" name="num1" id="num1" class="form-control" placeholder="Enter First Number" aria-describedby="helpId">
            <input type="number" name="num2" id="num2" class="form-control" placeholder="Enter Second Number" aria-describedby="helpId">
            <input type="number" name="num3" id="num3" class="form-control" placeholder="Enter Third Number" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <button class="btn btn-light rounded"> Submit </button>
          </div>
        </form>
        <?php
        if (isset($resultMax, $resultMin)) {
          echo "  <div class='alert alert-success'> Maximum namber is : $resultMax <br>";
          echo 'Minimum namber is : ' . $resultMin;
        }

        ?>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>