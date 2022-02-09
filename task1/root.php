<?php

$product = ['id' => 5, 'name' => 'labtop', 'price' => 300, 'name' => 'lab'];

if ($_POST) {

    $number1 = $_POST["num1"];
    $number2 = $_POST["num2"];

    $power = $number1 ** (1 / $number2);
    $result = "The Root($number2) for the number  ($number1) is  :    $power  ";
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
                <h1 class="text-center text-warning">Find the root</h1>
            </div>
            <div class="col-4 offset-4">
                <form method="post">

                    <div class="form-group">

                        <input type="number" name="num1" id="num1" class="form-control" placeholder="Enter Number which you need the root for it" aria-describedby="helpId">
                        <input type="number" name="num2" id="num1" class="form-control" placeholder="Enter the root" aria-describedby="helpId">

                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary rounded"> Submit </button>
                    </div>
                </form>
                <?php
                if (isset($result)) {
                    echo "<div class='alert alert-success'> $result ";
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