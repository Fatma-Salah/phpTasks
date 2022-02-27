<?php


            $title = 'Register';
         include_once "layouts/header.php";
         include_once "layouts/nav.php";
         include_once "layouts/bread-crump.php";
         use app\database\requests\RegisterRequest ;
         
            if($_POST)
            {  $errors = [];
                 $validation = new RegisterRequest ;
                 $validation->setPassword($_POST['password']);
                $validation->setPassword_confirmation($_POST['password_confirmation']);
                   $validation->passwordValidation(); 
                
                    // empty($errors['password']) && empty($errors['email']) && empty($errors['phone']) ){
                     


            
            }
     ?>
        <div class="login-register-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                     <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                               
                                <a data-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                
                                <div id="lg2" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <input type="text"     name="first_name"     placeholder="first_name">
                                                <input type="text"     name="last_name"     placeholder="last_name">
                                                <input type="password" name="password" placeholder="Password">
                        <?= $errors['password']['pasword-confirmation']; ?>
                                                <input type="password" name="confirm-password" placeholder="Password confirmation">
                                                <input type="email"    name="email"         placeholder="Email" >
                                                <input type="tel"      name="phone"         placeholder="phone">
                                                <select class="form-control mb-4"     name="gender" id="m">
                                                    <option value="f"> female</option>
                                                    <option value="m">male</option>
                                                </select>
                                                <div class="button-box ">
                                                    <button type="submit"><span>Register</span></button>
                                                </div>
                                       
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
         include_once "layouts/footer.php";
         include_once "layouts/scripts.php";
    
     ?>
