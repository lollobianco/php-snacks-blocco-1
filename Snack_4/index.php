<?php

   $numbersArray = [];

   while(count($numbersArray) < 15){

      $number = rand(1, 100);
      
      if(!in_array($number, $numbersArray)){
         $numbersArray[] = $number;
      };

   }

   var_dump($numbersArray)

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack_4</title>
</head>
<body>
   
</body>
</html>