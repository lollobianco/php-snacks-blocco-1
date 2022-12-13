<?php

$posts = [

   '10/12/2022' => [
       [
           'title' => 'Post 1',
           'author' => 'Michele',
           'text' => 'testo uno testo uno testo uno testo uno testo uno testo uno testo uno testo uno testo uno'
       ],
       [
           'title' => 'Post 2',
           'author' => 'Lorenzo',
           'text' => 'testo due testo due testo due testo due testo due testo due testo due testo due testo due'
       ],
   ],
   '14/11/2022' => [
       [
           'title' => 'Post 3',
           'author' => 'Erika',
           'text' => 'testo tre testo tre testo tre testo tre testo tre testo tre testo tre testo tre testo tre'
       ]
   ],
   '27/05/2022' => [
       [
           'title' => 'Post 4',
           'author' => 'Giovanni',
           'text' => 'testo quattro testo quattro testo quattro testo quattro testo quattro testo quattro testo quattro'
       ],
       [
           'title' => 'Post 5',
           'author' => 'Pietro',
           'text' => 'testo cinque testo cinque testo cinque testo cinque testo cinque testo cinque testo cinque'
       ],
       [
           'title' => 'Post 6',
           'author' => 'Alessandro',
           'text' => 'testo sei testo sei testo sei testo sei testo sei testo sei testo sei testo sei testo sei testo sei'
       ]
   ],
];


for($i = 0; $i < count($posts); $i++){

   echo '<br/>';

   $arrayKeyDate = array_keys($posts)[$i];

   echo $arrayKeyDate . '<br/>' . '<br/>';

   for($j = 0; $j < count(($posts)[$arrayKeyDate]); $j++){

      $postArray = ($arrayKeyDate)[$j];

      echo $posts[$arrayKeyDate][$j]['title'] . '<br/>';
      echo $posts[$arrayKeyDate][$j]['author'] . '<br/>';
      echo $posts[$arrayKeyDate][$j]['text'] . '<br/>' . '<br/>';

   }

   echo '<hr/>';

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack_3</title>
</head>
<body>
   



</body>
</html>