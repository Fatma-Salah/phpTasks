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
<h1 class="text-success bg-light m-5 w-25 mx-auto  text-center font-weight-bold p-4">Bank</h1>
<?php

if($_POST){
    // validation
    $errors = [];
    if(empty($_POST['userName'])){
      $errors['userName'] =  "<div class='alert alert-danger'>User name is required </div>";
    }
  
    if(empty($_POST['LoanAmount'])){
      $errors['LoanAmount'] =  "<div class='alert alert-danger'> Loan Amount is required </div>";
    }
    if(empty($_POST['loanYears'])){
        $errors['loanYears'] =  "<div class='alert alert-danger'> loan years is Required </div>";
      }
  
     if(empty($errors)){
        
      if($_POST['loanYears'] <= 3){ 

          $interest_rate = 0.1 * $_POST['LoanAmount'] * $_POST['loanYears']  ; 
          $loanAfterInterest =  $interest_rate + $_POST['LoanAmount'] ;
          $monthly = $loanAfterInterest /24 ;
        }else{
            $interest_rate = .15 *$_POST['loanYears'] * $_POST['LoanAmount'] ; 
            $loanAfterInterest =  $interest_rate + $_POST['LoanAmount'] ;
            $monthly = $loanAfterInterest /24 ;
        }
        $name = $_POST['userName'];
   $tables = [
       'User name'=> $name,
       'Interest rate' =>  $interest_rate,
       'loan after interest' => $loanAfterInterest,
       'Monthly' => $monthly
   
   ];
        }  
    
      }
    
    
  
  ?>

  
  <form action="" method="post"  class="form-group w-50 m-auto ">
      
        <div>
          <label class="text-success" >User name</label>
          <input type="text" name="userName" id="userName" value="<?php if(isset($_POST['userName'])){ echo $_POST['userName'] ;}?>" class="form-control mb-4" placeholder="" aria-describedby="helpId">
          <?php 
              if(!empty($errors['userName'])){
                echo $errors['userName'];
              }?>

          <label class="text-success">Loan amount</label>
          <input type="number" name="LoanAmount" id="LoanAmount"
           value="<?php if(isset($_POST['LoanAmount'])){ echo $_POST['LoanAmount'] ;}?>" class="form-control mb-4" placeholder="" aria-describedby="helpId">
          <?php 
              if(!empty($errors['LoanAmount'])){
                echo $errors['LoanAmount'];
              }?>

          <label class="text-success" >loan years</label>
          <input type="number" name="loanYears" id="loanYears" value="<?php if(isset($_POST['loanYears'])){ echo $_POST['loanYears'] ;}?>" class="form-control mb-4" placeholder="" aria-describedby="helpId">
          <?php 
              if(!empty($errors['loanYears'])){
                echo $errors['loanYears'];
              }
              
              ?>

        </div>
      <div class="m-auto col-3 form-group">
      <button class="btn btn-outline-success " > Calculate </button>
      </div>
     
  </form>   
  <?php
   
  if(isset($name) && isset($interest_rate) && isset($loanAfterInterest) &&isset($monthly)){
//   if(!empty($tables)){
      ?>
      <div class=" bg-light m-3 w-25 mx-auto text-success  text-center font-weight-italic p-4">
            Your bill
        </div>
<table class="table  mx-auto m-2 mb-5 w-75">
    <thead class="bg- text-success">
    <?php foreach ($tables as $property => $value) { ?>
                    <th class="border border-info"> <?= $property ?> </th>
                <?php } ?>        
    </thead>
    <tbody class="bg-light ">


        <tr>
        <?php foreach ($tables as $property => $value) { ?>

               <td class="border border-info"> <?= $value ;?> </td>
          <?php }  ?>   
        </tr>
       
    </tbody>
</table>

  <?php }?>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>