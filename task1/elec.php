<?php
if ($_POST) {
  $electricity_unit_charges = $_POST['charges'];
  if ($electricity_unit_charges <= 50) {
    $bill = $electricity_unit_charges * 0.5;
  } elseif ($electricity_unit_charges <= 150) {
    $bill = $electricity_unit_charges * 0.75;
  } elseif ($electricity_unit_charges <= 250) {
    $bill = $electricity_unit_charges * 1.20;
  } elseif ($electricity_unit_charges > 250) {
    $bill = $electricity_unit_charges * 1.50;
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
      color: green;
    }
  </style>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="contianer">
    <div class="row mt-5">
      <div class="col-12">
        <h1 class="text-center">Know your bill</h1>
      </div>
      <div class="col-4 offset-4">

        <form method="post">
          <div class="form-group">
            <label for=""></label>
            <input type="number" name="charges" class="form-control" placeholder="Enter electricity unit charges " aria-describedby="helpId">
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
          </div>

          <div class="form-group">
            <button class="btn btn-light rounded"> Submit </button>
          </div>
        </form>
        <?php
        if (isset($bill)) {
          echo ' <div class=\'alert alert-success\'> "Electricity bill"  <br><br> your bill before the tax : ' . $bill . " <strong> EGP </strong><br> Tax (14%) is : " . $bill * .14 . "<strong> EGP </strong> <br> your bill after tax is :  " . ($bill * .14) + $bill . "<strong>EGP</strong> ";
          if ($electricity_unit_charges > 250) {
            echo " <div class='alert alert-danger'> <strong> Please, save electricity </strong>";
          }
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