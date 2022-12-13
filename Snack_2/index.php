<?php

$nome = $_GET["nome"];
$email = $_GET["email"];
$età = $_GET["età"]; 

?>

<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>
   <body>
      
      <form method="get">

         <input type="text" placeholder='nome' name='nome'>
         <input type="text" placeholder='email' name='email'>
         <input type="number" placeholder='età' name='età'>
         <button type="submit">invia</button>
         
      </form>

      <?php 
      
         if(strlen($nome) > 3 && strpos($email, '.') != false && strpos($email, '@') != false && is_numeric($età) != false){
            
            echo('Accesso Riuscito');

         } else{

            echo('Accesso Negato');

         }

      ?>

   </body>
   </html>