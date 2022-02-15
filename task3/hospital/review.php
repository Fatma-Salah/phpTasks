<?php
$title = 'Review';
include_once "header.php";

?>

<form action="Result.php" method="post">
   <div class="form-group w-75 mt-5 mx-auto">
      <table class=" table table-striped  col-12 ">
         <thead class="bg-info text-white">
            <tr>
               <th class="col-4 ">Question</th>
               <th class="col-2">Bad</th>
               <th class="col-2">Good</th>
               <th class="col-2 ">Very Good</th>
               <th class="col-2">Excellent</th>
            </tr>
         </thead>
         <?php
            if (!empty($_SESSION['errors']['cleanliness'])) {
               echo  $_SESSION['errors']['cleanliness'] ;}
               if (!empty($_SESSION['errors']['servicePrice'])) {
                  echo $_SESSION['errors']['servicePrice'];
               }
               if (!empty($_SESSION['errors']['nursingService'])) {
                  echo $_SESSION['errors']['nursingService'];
               }
               if (!empty($_SESSION['errors']['experience'])) {
                  echo $_SESSION['errors']['experience'];
               }
               if (!empty($_SESSION['errors']['calmness'])) {
                  echo $_SESSION['errors']['calmness'];
               }
            
            ?>

         <tbody class="bg-light">

            <tr>
               <td class="col-5"> Q-1 : Are you satisfied with the level of cleanliness </td>
               <td class="col-2"> <input type="radio" name="cleanliness" value="Bad"> </td>
               <td class="col-2"> <input type="radio" name="cleanliness" value="good"></td>
               <td class="col-2"><input type="radio" name="cleanliness" value="veryGood"></td>
               <td class="col-2"> <input type="radio" name="cleanliness" value="excellent"> </td>
            </tr>
            <tr>
               <td class="col-4 p-3"> Q-2 : Are you satisfied with the service prices</td>
               <td class="col-2"> <input type="radio" name="servicePrice" value="Bad"> </td>
               <td class="col-2"> <input type="radio" name="servicePrice" value="good"></td>
               <td class="col-2"><input type="radio" name="servicePrice" value="veryGood"></td>
               <td class="col-2"> <input type="radio" name="servicePrice" value="excellent"> </td>
            </tr>
            <tr>
               <td class="col-4"> Q-3 : Are you satisfied with the nursing service </td>
               <td class="col-2"> <input type="radio" name="nursingService" value="Bad"> </td>
               <td class="col-2"> <input type="radio" name="nursingService" value="good"></td>
               <td class="col-2"><input type="radio" name="nursingService" value="veryGood"></td>
               <td class="col-2"> <input type="radio" name="nursingService" value="excellent"> </td>
            </tr>
            <tr>
               <td class="col-4"> Q-4 : Are you satisfied with the experience of the doctor </td>
               <td class="col-2"> <input type="radio" name="experience" value="Bad"> </td>
               <td class="col-2"> <input type="radio" name="experience" value="good"></td>
               <td class="col-2"><input type="radio" name="experience" value="veryGood"></td>
               <td class="col-2"> <input type="radio" name="experience" value="excellent"> </td>
            </tr>
            <tr>
               <td class="col-4"> Q-5 : Are you satisfied with the calmness in the hospital </td>
               <td class="col-2"> <input type="radio" name="calmness" value="Bad"> </td>
               <td class="col-2"> <input type="radio" name="calmness" value="good"></td>
               <td class="col-2"><input type="radio" name="calmness" value="veryGood"></td>
               <td class="col-2"> <input type="radio" name="calmness" value="excellent"> </td>
            </tr>
         </tbody>

      </table>
   </div>
  
   <div class=" m-auto w-25 form-group">
      <button class="btn btn-outline-info "> Result </button>
   </div>
</form>



<?php

include_once "script.php";
unset($_SESSION['errors']);
?>