<?php 

   $partite = [

      [
         'squadraCasa' => 'Milano',
         'squadraOspite' => 'Cantù',
         'puntiCasa' => 55,
         'puntiOspite' => 60,
      ],
      [
         'squadraCasa' => 'Genova',
         'squadraOspite' => 'Bari',
         'puntiCasa' => 65,
         'puntiOspite' => 80,
      ],
      [
         'squadraCasa' => 'Palermo',
         'squadraOspite' => 'Roma',
         'puntiCasa' => 33,
         'puntiOspite' => 21,
      ],
      [
         'squadraCasa' => 'Bologna',
         'squadraOspite' => 'Lazio',
         'puntiCasa' => 46,
         'puntiOspite' => 88,
      ],

   ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack_1</title>
</head>
<body>

<p>
   <?php

      for( $i = 0; $i < count($partite); $i++ ){

         echo $partite[$i]['squadraCasa'] . ' - ' . $partite[$i]['squadraOspite'] . ' | ' . $partite[$i]['puntiCasa'] . ' - ' . $partite[$i]['puntiOspite'] . ' ';

      };

   ?>
</p>
   
</body>
</html>