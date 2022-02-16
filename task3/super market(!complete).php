<!doctype html>
<html lang="en">
  <head>
    <title>Super market</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php
      
      if ($_POST) {
      

        $errors = [];
        if (empty($_POST['user'])) {
            $errors['user'] =  "<div class='alert alert-danger'>User name is required </div>";
        }

        if (empty($_POST['num'])) {
            $errors['num'] =  "<div class='alert alert-danger'> Number of varieties is required </div>";
        }
        if (empty($_POST['city'])) {
            $errors['city'] =  "<div class='alert alert-danger'> city is Required </div>";
        }
    } ?>

  <form method="post"  class="w-50 mt-5 mx-auto ">
      <div class="form-group"  >
       <label class="m-2 text-danger" for="">User name</label>
        <input  type="username" name="user"  value="<?php if (isset($_POST['user'])) {echo $_POST['user']; } ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <?php
            if (!empty($errors['user'])) {
                echo $errors['user'];
            } ?>

    <label class="m-2 text-danger" for="">Number of varieties</label>
        <input  type="number" name="num"  value="<?php if (isset($_POST['num'])) {echo $_POST['num']; } ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <?php
            if (!empty($errors['num'])) {
                echo $errors['num'];
            } ?>
        
        <label class="m-2 text-danger" for="">city</label><br>
        <select name="city" class="col-12">
        <option  value="Cairo" >Cairo</option> 
        <option  value="Giza" >Giza</option>
        <option  value="Alex" >Alex</option>
        <option  value="Other" >Other</option> 
          
    </select> 
    <?php
  
            if (!empty($errors['city'])) {
                echo $errors['city'];
            } ?>
      </div>
      <div class="  form-group">
            <button class="btn btn-outline-danger col-12 mx-auto"> Enter product </button>
        </div>
  </form>    

<?php 
  if($_POST){
if (empty($errors)) { ?>
<form action="" method="post">

<table class="table">
    <thead>
        <tr>
            
            <th>Product Name </th>
            <th> Price </th>
            <th> Quantities</th>
        </tr>
    </thead>
    <tbody>
        <?php
    for($_POST['num'] ; $_POST['num']>0 ;$_POST['num']--) { ;?>
    <tr >
            <td  ><input type="text" name="product" value=" <?php if (isset($_POST['product'])) {echo $_POST['product']; } ?>"> </td>
            <?php
            if (!empty($errors['product'])) {
                echo $errors['product'];
            } ?>
            <td ><input type="number" name="price" value=" <?php if (isset($_POST['price'])) {echo $_POST['price']; } ?>"> </td>
            <?php
            if (!empty($errors['price'])) {
                echo $errors['price'];
            } ?>
            <td ><input type="number" name="quantity" value=" <?php if (isset($_POST['pqantity'])) {echo $_POST['qantity']; } ?>"> </td>
            <?php
            if (!empty($errors['quantity'])) {
                echo $errors['quantity'];
            } ?>
        </tr>
   <?php } ?> 
    </tbody>
</table>
<div class="m-auto col-3 form-group">
            <button class="btn btn-outline-danger "> Receipt </button>
        </div>
</form>

<?php } 
$error = [];
if (empty($_POST['product'])) {
    $error['product'] =  "<div class='alert alert-danger'>Product is required </div>";
}

if (empty($_POST['price'])) {
    $error['price'] =  "<div class='alert alert-danger'> Price is required </div>";
}
if (empty($_POST['quantity'])) {
    $error['quantity'] =  "<div class='alert alert-danger'> Quantity is Required </div>";
}
if(empty($error)  ){?>

<table class="table">
<thead>

        <tr>
            <th >Product Name </th>
            <th> Price </th>
            <th> Quantities</th>
            <th>Sub Total</th>
        </tr>
         
        <tr>
            <td><?= $_POST['product']?></td>
            <td><?= $_POST['price']?></td> 
            <td> <?= $_POST['quantity']?> </td>
             <td><?= $_POST['price'] *$_POST['price'] * $_POST['quantity']?></td>
           
           
        </tr>
       
    </thead>
    <tbody>
        <tr>
            <td class="col-6">Client name </td>
            <td class="col-6"><?= $_POST['user'] ?></td>
        </tr>
        <tr>
            <td class="col-6">City</td>
            <td class="col-6"><?= $_POST['user'] ?></td>
        </tr>
        <tr>
            <td class="col-6">Total</td> 
            <td class="col-6">
                <?php
                    if(!empty( $_POST['price'])){
                        
                            $_POST['price']*=$_POST['price'];
                       
                    }
            
            
                    

?>
            </td>
        </tr>
        <tr>
            <td class="col-6">Discount</td>
            <td class="col-6"></td>
        </tr>
        <tr>
            <td class="col-6"> Total after discount</td>
            <td class="col-6"></td>
        </tr>
        <tr>
            <td class="col-6">Delivery</td>
            <td class="col-6"></td>
        </tr>
        <tr>
            <td class="col-6">Total price</td>
            <td class="col-6"></td>
        </tr>
        
    </tbody>
</table>

<?php }
}?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>