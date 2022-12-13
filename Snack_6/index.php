<?php

$db = [
   'teachers' => [
      [
         'name' => 'Michele',
         'lastname' => 'Papagni'
      ],
      [
         'name' => 'Fabio',
         'lastname' => 'Forghieri'
      ]
   ],

   'pm' => [
      [
         'name' => 'Roberto',
         'lastname' => 'Marazzini'
      ],
      [
         'name' => 'Federico',
         'lastname' => 'Pellegrini'
      ]
   ]
];

?>

<!DOCTYPE html>
<!doctype html>
<html lang="en">

<head>
   <title>Title</title>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS v5.2.1 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

   <div class="d-flex">

      <?php
      
         for($i = 0; $i < count($db); $i++){

            $roles = array_keys($db)[$i];
         
            for($j = 0; $j < count(($db)[$roles]); $j++){
         
               $person = ($roles)[$j];
         
               if($roles == 'teachers'){
                  
                  echo '<div class="bg-secondary w-50 vh-100 align-items-center justify-content-center">' . $db[$roles][$j]['name'] . ' - ' . $db[$roles][$j]['lastname'] . '</div>';

               } else {

                  echo '<div class="bg-success w-50 vh-100 align-items-center justify-content-center">' . $db[$roles][$j]['name'] . ' - ' . $db[$roles][$j]['lastname'] . '</div>';

               }
            }
         
         };
      
      ?>

   </div>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
   </script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
   </script>
</body>

</html>