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

   for( $i = 0; $i < count($partite); $i++ ){

      echo $partite[$i]['squadraCasa'] . ' - ' . $partite[$i]['squadraOspite'] . ' | ' . $partite[$i]['puntiCasa'] . ' - ' . $partite[$i]['puntiOspite'];

   };

?>