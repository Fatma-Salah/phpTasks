<?php
if ($_GET) {

$number1 = $_GET["num1"];
$number2 = $_GET["num2"];
// $Add = $_GET["add"];
// $Subtract = $_GET["sub"];
// $Multiply = $_GET["multi"];
// $Divide = $_GET["divide"];
// $Power = $_GET["power"];
// $Root = $_GET["root"];

if(isset($_GET["add"])){
    $result = "Addition of numbers is :" .($number1 + $number2) ;
    }elseif(isset($_GET["sub"])){
        $result ="Subtraction of numbers is :" .($number1 - $number2) ;
        
        }elseif(isset($_GET["multi"])){
            $result ="Multipliction of numbers is :" .($number1 * $number2 );
            
            }elseif(isset($_GET["divide"])){
                $result ="Division of numbers is :" .($number1 / $number2 );
                
                }elseif(isset($_GET["power"])){
                    $result ="Power of numbers is :" .($number1 ** $number2 );
                    
                    }elseif(isset($_GET["root"])){
                        $result= "Root of numbers is : ".($number1 ** (1/$number2)) ;
                        
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
    label {color:purple}
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body >
      <h1 class="m-4 alert-success mx-auto w-75 text-center  "> calculator </h1>
      <form method="GET" class="m-2  w-50 mx-auto  ">
          <div class="form-group">
            <label> Enter your first number </label>
            <input type="number" name="num1" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
            <label> Enter your second number </label>
            <input type="number" name="num2" id="" class="form-control" placeholder="" aria-describedby="helpId">
           </div>
           <div class="form-group  text-center p-2">
           <button  class="alert-primary  text-center  " type="submit" name="add"> Add</button>
           <button  class="alert-primary  text-center  "  type="submit" name="sub"> Subtract</button>
           <button  class="alert-primary  text-center  " type="submit" name="multi"> Multiply</button>
           <button  class="alert-primary  text-center  " type="submit" name="divide"> Divide</button>
           <button  class="alert-primary  text-center  " type="submit" name="power"> Power</button>
           <button  class="alert-primary  text-center  " type="submit" name="root"> Root</button>
           </div>
        </form>
        <?php

// if(isset($Add)  || isset($Subtract) || isset($Multiply) || isset($Divide) || isset($Power) || isset($Root)){
   
    if(isset($result)){
echo "<div class='alert alert-success  text-center w-50 m-auto p-4  border-secondary'>".$result;
}
    

        ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>