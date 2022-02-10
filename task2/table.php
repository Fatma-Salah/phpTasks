<?php
$users =[
(object)['id'=>1 , "name" => "yasmen" ,
 "gender" => (object)['gender' => 'f'],
 'hobbies'=> ['reading , tennis ,basketball'],
 'activities'=> ['school' => 'drawing' , 'home' => 'watching TV']
], //end first value in $users

(object)['id'=>2 , "name" => "Noha" ,
 "gender" => (object)['gender' => 'f'],
 'hobbies'=> ['reading' ,'swimming'],
 'activities'=> ['school' => 'drawing' ]
], //end second value in $users

(object)['id'=>3 , "name" => "Ahmed" ,
 "gender" => (object)['gender' => 'm'],
 'hobbies'=>'football',
 'activities'=> ['school' => 'reading' , 'home' => 'watching TV', 'library'=>'writing' ]
 ] //end third value in $users


]; // end $users




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
      <p class="text-center  w-50 p-3  m-auto  alert-success" > Table for some information about user</p>
      <table border="1px">
          <thead>
              <tr>
                <!-- <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Hobbies</th>
                <th>Activities</th> -->
                <?php
              foreach($users[0] As $key =>$value ){?>
                  
                    <th value=<?php echo $key; ?>>  <?php echo $key ?>   </th>
                 
                
             <?php } ?> 
             
         
             <tr>
          </thead>
          <tbody>
              <!-- <?php  foreach($users As $key => $value){}  ?> -->
              <tr>
                  <td><?php echo $users[0]->id ; ?></td>
                  <td><?php echo $users[0]->name ; ?></td>
                  <td><?php 
                  if($users[0]->gender->gender == 'f'){
                  echo 'female' ; 
                  }else{echo 'male' ; }
                  ?>
                  </td>
                  <td><?php  echo $users[0]->hobbies[0]; ?></td>
                  <td><?php  echo $users[0]->activities['school'] ."," .$users[0]->activities['home']; ?></td>
              </tr>
              <tr>
                  <td><?php echo $users[1]->id ; ?></td>
                  <td><?php echo $users[1]->name ; ?></td>
                  <td><?php 
                  if($users[1]->gender->gender == 'f'){
                  echo 'female' ; 
                  }else{echo 'male' ; }
                  ?>
                  </td>
                  <td><?php  echo $users[1]->hobbies[0] ." , ".$users[1]->hobbies[1]; ?></td>
                  <td><?php  echo $users[1]->activities['school']; ?></td>
              </tr>

             
              <tr>
                  <td><?php echo $users[2]->id ; ?></td>
                  <td><?php echo $users[2]->name ; ?></td>
                  <td><?php 
                  if($users[2]->gender->gender == 'f'){
                  echo 'female' ; 
                  }else{echo 'male' ; }
                  ?>
                  </td>
                  <td><?php  echo $users[2]->hobbies  ?></td>
                  <td><?php  echo $users[2]->activities['school'] . " , " .$users[2]->activities['home'] . " , " .$users[2]->activities['library']; ?></td>
              </tr>
              
               <!-- <?php
              foreach($users As $key =>$value ){?>
                  
                    <tr value=<? $key ?>>  <? $value ?>   </tr>
                 
                
             <?php } ?>       -->


          </tbody>


      </table>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>