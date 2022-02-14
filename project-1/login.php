<?php
$title='Log In';
include_once 'layouts/header.php';
include_once 'layouts/nav.php';
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => 'm',
        'image' => '1.jpg',
        'email' => 'ahmed@gmail.com',
        'password' => 123456
    ],
    (object)[
        'id' => 1,
        'name' => 'moahmed',
        "gender" => 'm',
        'image' => '2.jpg',
        'email' => 'mohamed@gmail.com',
        'password' => 123456
    ],
    (object)[
        'id' => 1,
        'name' => 'esraa',
        "gender" => 'f',
        'image' => '3.jpg',
        'email' => 'esraa@gmail.com',
        'password' => 123456
    ],
];
if($_POST){
    $errors=[];  
if(empty($_POST['email'])){
    $errors['email'] =
    "<div class='alert alert-danger' > email Required</div>" ;

}
if(empty($_POST['password'])){
    $errors['password'] =
    "<div class='alert alert-danger' > password Required </div>" ;

}

if(empty($errors)){
    foreach($users as  $user){
        if($user->email == $_POST['email']  && $user->password == $_POST['password']  )
                {
                    $_SESSION['$user'] = $user;
                    header('location:home.php'); die;
                }
                    $errors['wrong data'] =
    "<div class='alert alert-danger ' > password Wrong or email wrong </div>" ;
                

    }
}
}
?>

<h1 style="text-align: center; color:green; margin:50px ">Log in</h1>
<form action="" method="post">
    <div class="form-group w-25 m-auto">
    <label >E-mail</label>
      <input type="email" name="email" id="email" class="form-control mb-4" placeholder="" aria-describedby="helpId">
      <?php  if(!empty($errors['email'])){echo $errors['email']; }?>
     
      <label >Password</label>
      <input type="password" name="password" id="password" class="form-control mb-4" placeholder="" aria-describedby="helpId">
    <?php  if(!empty($errors['password'])){ echo $errors['password']; }?>
    <button  class="btn btn-outline-success">LogIn</button>
    </div>
  <?php if(!empty ($errors['wrong data'] )){ echo $errors['wrong data'] ;}
  ?> 
</form>

<?php
include_once 'layouts/footer.php';
include_once 'layouts/scripts.php';
?>
