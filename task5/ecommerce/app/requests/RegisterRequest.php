<?php
namespace app\database\requests;

class RegisterRequest {
    private $first_name;
    private $last_name;
    private $password;
    private $password_confirmation;
    private $email;
    private $phone;
    private $gender;

      /**
     * Get the value of first_name
     */ 
    public function getfirstname()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setfirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }
    /**
   * Get the value of last_name
   */ 
  public function getlastname()
  {
      return $this->last_name;
  }

  /**
   * Set the value of last_name
   *
   * @return  self
   */ 
  public function setlastName($last_name)
  {
      $this->last_name = $last_name;

      return $this;
  }
    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of password_confirmation
     */ 
    public function getPassword_confirmation()
    {
        return $this->password_confirmation;
    }

    /**
     * Set the value of password_confirmation
     *
     * @return  self
     */ 
    public function setPassword_confirmation($password_confirmation)
    {
        $this->password_confirmation = $password_confirmation;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    
      /**
     * Get the value of gender
     */ 
    public function getgender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setgender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

// methods   
    public function first_nameValidation(){
        $errors =[];
        if(empty($this->first_name)){
            $errors['first_name'] = "<div class='alert alert danger'>" ."First name Is Required" ."</div>";
        }
        return $errors;
    }
    public function last_nameValidation(){
        $errors =[];
        if(empty($this->last_name)){
            $errors['last_name'] = "<div class='alert alert danger'>" ."Last name Is Required" ."</div>";
        }
        return $errors;
    }

    public function passwordValidation() :array
    {
        $errors = [];
        # required 
        if(empty($this->password)){
            $errors['pasword-required'] = "Password Is Required";
        }
        if(empty($this->password_confirmation)){
            $errors['password_confirmation'] = "Password Is confirmmed";
    }
        # no validation errors
        if(empty($errors)){
            #,regex 
            if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/',$this->password)){
                $errors['pasword-regex'] = 
          "<div class='alert alert danger'>"  . 
          "Minimum eight and maximum 16 characters, at least one uppercase
           letter, one lowercase letter, one number and one special 
           character:" . "</div>" ; }
            
            if(empty($errors)){
                # confirmed
                if($this->password != $this->password_confirmation){
                    $errors['pasword-confirmed'] = "Password dosen't match password confirmation";
                }
        
        }}
        return $errors;
        }

  
       
        
        
    

    public function emailValidaiton()
    {
     
        $errors = [];
        # required 
        if(empty($this->email)){
            $errors['email'] = "Email Is Required";
        }
        # no validation errors
        if(empty($errors)){
            #,regex 
            if(!preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/',$this->email)){
                $errors['email-regex'] = 
                "<div class='alert alert danger'>
             <?= 'somthing@someserver.com OR firstname.lastname@mailserver.domain.com OR username-something@some-server' ; ?>
               </div>" ;
            }
            
            if(empty($errors)){
                   # unique
                if(isset($this->email)){
                    $errors['emailValidaiton'] = " this mail already exist";
                }
            }
        }
        return $errors;
    }

    public function phoneValidation()
    {
        #// required , regex , unique
        $errors = [];
        # required 
        if(empty($this->phone)){
            $errors['phoneValidation'] = "Phone Is Required";
        }
        # no validation errors
        if(empty($errors)){
            #,regex 
            if(!preg_match('01[1]*[2]*[5]*[0]*[0-9]',$this->phone)){
                $errors['phoneValidation'] = " Phone" ;
            }
            
            if(empty($errors)){
                   # unique
                if(isset($this->phone)){
                    $errors['phoneValidation'] = " this Phone already exist";
                }
            
        }
        return $errors;
    }
}
}
                                         

?>