<?php

if ($_POST) {
  $Physics = $_POST['Physics'];
  $Chemistry = $_POST['Chemistry'];;
  $Biology = $_POST['Biology'];
  $Mathematics = $_POST['Mathematics'];
  $Computer = $_POST['Computer'];

  if (($Physics <= 50 &&$Physics >=0) && ($Chemistry <= 50 &&$Chemistry >=0 )&& ($Biology <= 50 && $Biology >=0 )&& ($Mathematics <= 50 && $Mathematics >=0 )&& ($Computer <= 50 && $Computer >=0)) {
    $result = ($Physics + $Chemistry + $Biology + $Mathematics + $Computer);
    $percentage = ($result / 250) * 100;
    if ($percentage < 40 && $percentage >= 0) {
      $message1 = 'Grade F';
    } elseif ($percentage < 60 && $percentage >= 40) {
      $message = 'Grade E';
    } elseif ($percentage < 70 && $percentage >= 60) {
      $message = 'Grade D';
    } elseif ($percentage < 80 && $percentage >= 70) {
      $message = 'Grade c';
    } elseif ($percentage < 90 && $percentage >= 80) {
      $message = 'Grade B';
    } else {
      $message = 'Grade A';
    }
} else{
  $warning="you enter error degree, subject degree must between 0 and 50";
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
  <style>
    h1 {
      color: purple;
    }
  </style>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="contianer">
    <div class="row mt-5">
      <div class="col-12">
        <h1 class="text-center">persentege of your degree</h1>
      </div>
      <div class="col-4 offset-4">

        <form method="post">
          <div class="form-group">
            <label for=""></label>
            <input type="number" name="Physics" class="form-control" placeholder="Enter your degree in Physics" aria-describedby="helpId">
            <input type="number" name="Chemistry" class="form-control" placeholder="Enter your degree in Chemistry" aria-describedby="helpId">
            <input type="number" name="Biology" class="form-control" placeholder="Enter your degree in Biology" aria-describedby="helpId">
            <input type="number" name="Mathematics" class="form-control" placeholder="Enter your degree in Mathematics" aria-describedby="helpId">
            <input type="number" name="Computer" class="form-control" placeholder="Enter your degree in Computer" aria-describedby="helpId">
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
          </div>

          <div class="form-group">
            <button class="btn btn-primary rounded"> Submit </button>
          </div>
        </form>
        <?php
        if (isset($result)) {
          if ($percentage >= 40) {

            echo " <div class='alert alert-success'> <center>  \"Conngratulations\" </center> <br> your result is : <strong> $result </strong> <br> your percentage is : <strong> $percentage % </strong> <br> your degree is : <strong>$message</strong>";
          } else {
            echo "<div class='alert alert-danger'> <center> \"Good Luck\" </center> <br> your result is : <strong> $result </strong> <br> your percentage is : <strong> $percentage % </strong> <br> your degree is : <strong> $message1  </strong>";
          }
        }
        if(isset($warning )){ echo" <div class='alert alert-danger'>$warning";}
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