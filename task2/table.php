<?php
$users = [
  (object)[
    'id' => 1, "name" => "yasmen",
    "gender" => (object)['gender' => 'f'],
    'hobbies' => ['reading ', ' tennis', 'basketball'],
    'activities' => ['school' => 'drawing', 'home' => 'watching TV']
  ], // end first value in $users

  (object)[
    'id' => 2, "name" => "Noha",
    "gender" => (object)['gender' => 'f'],
    'hobbies' => ['reading', 'swimming'],
    'activities' => ['school' => 'drawing']
  ], //end second value in $users

  (object)[
    'id' => 3, "name" => "Ahmed",
    "gender" => (object)['gender' => 'm'],
    'hobbies' => 'football',
    'activities' => ['school' => 'reading', 'home' => 'watching TV', 'library' => 'writing']
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
  <style>
    td,
    th {
      border: 1px solid black;
    }
    
  </style>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <?php
  if (count($users) >= 1) //condition check that array has value
  { ?>
    <caption>
           <div class="text-center w-50  mx-auto mt-4 p-4 bg-light text-info  "> Information about user
    </caption>
    </div>
    <table class="table table-striped table-inverse mx-auto m-2 w-75  ">

          <thead class="thead-inverse bg-secondary text-light">
                <?php
                    foreach ($users[count($users) - 1] as $property => $value) { ?>
                      <th> <?php echo $property; ?> </th>
                <?php } ?>

          </thead>

          <tbody class="bg-light ">

            <?php foreach ($users as  $user) { ?>
              <tr>
                <?php foreach ($user as $property => $value) { ?>
              <td>
                    <?php

                    if (gettype($value) == 'array' || gettype($value) == 'object') {
                      foreach ($value as $k => $v) {
                        if ($property == 'gender') {
                          if ($v == 'm') {
                            $v = 'male';
                          } else {
                            $v = 'female';
                          }
                        }
                      
                        echo $v .' ,';
                      }
                    } else {  //not array or object
                      echo $value;
                    }

                    ?>

              </td>
                <?php } ?>
              </tr>
            <?php } ?>
          </tbody>

    </table>
  <?php } ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>