<?php

$arrayClasse = [
   [
      'nome' => 'Alessio',
      'cognome' => 'Rossi',
      'voti' => [2,4,5,6,7]
   ],
   [
      'nome' => 'Lorenzo',
      'cognome' => 'Gigio',
      'voti' => [2,6,5,6,9]
   ]
];

for ($i = 0; $i < count($arrayClasse); $i++){

   $mediaVoti = array_sum($arrayClasse[$i]['voti']) / count($arrayClasse[$i]['voti']);

   echo $arrayClasse[$i]['nome'] . '-' . $arrayClasse[$i]['cognome'];
   echo '<br/>';
   echo 'La media dei voti è: ' . $mediaVoti;
   echo '<br/>';
   echo '<hr/>';

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack-7</title>
</head>
<body>
   
</body>
</html>