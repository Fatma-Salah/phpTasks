<?php
$title = 'Result' ;
include_once "header.php";
if ($_POST) {
   $errors = [];
   if (empty($_POST['cleanliness'])) {
      $errors['cleanliness'] =  "<div class='alert alert-danger'> Q1 is required </div>";
   }
   
   if (empty($_POST['servicePrice'])) {
      $errors['servicePrice'] =  "<div class='alert alert-danger'> Q2 is required </div>";
   }
   if (empty($_POST['nursingService'])) {
      $errors['nursingService'] =  "<div class='alert alert-danger'>Q3 is required </div>";
   }
   if (empty($_POST['experience'])) {
      $errors['experience'] =  "<div class='alert alert-danger'>Q4 is required </div>";
   }
   if (empty($_POST['calmness'])) {
      $errors['calmness'] =  "<div class='alert alert-danger'>Q5 required </div>";
   }
   $_SESSION['errors'] = $errors;
   // header('location:review.php');

}
 if(!empty($_POST['cleanliness']) && !empty($_POST['servicePrice']) && !empty($_POST['nursingService']) && !empty($_POST['experience']) && !empty($_POST['calmness'])){
    
  if(!empty($_POST['cleanliness'])){
    if($_POST['cleanliness'] == 'Bad') 
    {  $value1 ='0'; 
       $_POST['cleanliness'] ='Bad';
       
    }else if($_POST['cleanliness'] == 'good') 
    {    $value1 =3;
         $_POST['cleanliness'] ='Good';
    }else if($_POST['cleanliness'] == 'veryGood') 
    {    $value1 =5;
         $_POST['cleanliness'] ='Very Good';
    }else if($_POST['cleanliness'] == 'excellent') 
    {   $value1 =10;
         $_POST['cleanliness'] =10;
    }
}
  if(!empty($_POST['servicePrice'])){
      if($_POST['servicePrice'] == 'Bad') 
      {$value2 =0;
         $_POST['servicePrice'] ='Bad';
      }
      else if($_POST['servicePrice'] == 'good') 
      {$value2 =3;
         $_POST['servicePrice'] ='Good';
      }
      else if($_POST['servicePrice'] == 'veryGood') 
      {$value2 =5;
         $_POST['servicePrice'] ='Very Good';
      }else if($_POST['servicePrice'] == 'excellent') 
      {$value2 =10;
         $_POST['servicePrice'] ='Excellent';
      }
    }
      if(!empty($_POST['nursingService'])){
            if($_POST['nursingService'] == 'Bad') 
            { $value3 =0;
               $_POST['nursingService'] ='Bad';
            }else if($_POST['nursingService'] == 'good') 
            { $value3 =3;
               $_POST['nursingService'] ='Good';
            }else if($_POST['nursingService'] == 'veryGood') 
            { $value3 =5;
               $_POST['nursingService'] ='Very Good';
            }else if($_POST['nursingService'] == 'excellent') 
            { $value3 =10;
               $_POST['nursingService'] ='Excellent';
            }
         }
            if(!empty($_POST['experience'])){
               if($_POST['experience'] == 'Bad') 
               { $value4 =0;
                  $_POST['experience'] ='Bad';
               }else if($_POST['experience'] == 'good') 
               { $value4 =3;
                  $_POST['experience'] ='Good';
               }else if($_POST['experience'] == 'veryGood') 
               {$value4 =5;
                  $_POST['experience'] ='Very Good';
               }else if($_POST['experience'] == 'excellent') 
               {$value4 =10;
                  $_POST['experience'] ='Excellent';
               }
            }
            if(!empty($_POST['calmness'])){
                  if($_POST['calmness'] == 'Bad') 
                  {$value5 =0;
                     $_POST['calmness'] ='Bad';
                  }else if($_POST['calmness'] == 'good') 
                  {$value5 =3;
                     $_POST['calmness'] ='Good';
                  }else if($_POST['calmness'] == 'veryGood') 
                  {$value5 =5;
                     $_POST['calmness'] ='Very Good';
                  }else if($_POST['calmness'] == 'excellent') 
                  {$value5 =10;
                     $_POST['calmness'] ='Excellent';
                  }
               }
               ?>

<table class="table  table-striped mt-5 w-75 mx-auto">
    <thead class="bg-info">
        <tr>
            <th class="col-9">Questions</th>
            <th class="col-3">Reviews</th>
           
        </tr>
    </thead>
    <tbody>
        <tr>
        <td class="col-9"> Q-1 : Are you satisfied with the level of cleanliness </td>   
        <td><?= $_POST['cleanliness']?></td>
        </tr>
        <tr>
        <td > Q-2 : Are you satisfied with the service prices</td>
        <td><?= $_POST['servicePrice']?></td>
        </tr>
        <tr>
        <td class="col-9">  Q-3 : Are you satisfied with the nursing service </td>   
        <td><?= $_POST['nursingService']?></td>
        </tr>
        <tr>
        <td class="col-9"> Q-4 : Are you satisfied with the experience of the doctor</td>
        <td><?= $_POST['experience']?></td>
        </tr>
        <tr>
        <td class="col-9">Q-5 : Are you satisfied with the calmness in the hospital</td>
        <td><?php echo $_POST['calmness']?></td>
        </tr>
        <tr class="bg-primary text-white font-weight-bold">
        <td class="col-9">Total Review</td>
        <td><?php if(($value1+ $value2 +$value3+$value4+$value5) <25){echo 'Bad';}
        else{echo 'Good';}
        ?></td>
        </tr>
      
    </tbody>
</table>


            <div class="col-8 m-auto mt-5 text-center font-weight-bold text-success p-3">
                <?php 
                  if(($value1+$value2+$value3+$value4+$value5) <25){
                    echo "We will call you later on this phone : " .$_SESSION['phone'] ;
                }
                    else{ 
                    
                        echo 'thank you' ;
                    }
                 ?>
            </div>
        
            <?php }?>

<?php
              
           
     
           
include_once "script.php";
?>