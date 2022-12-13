<?php

   $paragraph = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam mollitia voluptatibus odio praesentium vitae, delectus rerum minima, similique ipsam non laborum possimus beatae consequuntur. Sed deleniti totam possimus expedita natus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque voluptate eaque minus! Odit impedit iure hic sit reiciendis. Similique mollitia temporibus accusamus debitis, ipsum soluta deserunt harum itaque inventore quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita velit eveniet nam debitis ratione, repellat tempore aliquid a vel neque sequi, sunt quibusdam, accusantium quas. Vel nostrum aperiam tenetur ipsum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam quasi alias vitae aperiam, dignissimos assumenda illo nobis ullam commodi veritatis est numquam porro voluptatibus ipsum, enim repellendus iure amet. Adipisci. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam magni qui repellendus ex perferendis natus a! Dolorem incidunt earum aut aperiam eveniet rem iusto minima, sint quia porro quasi consequuntur? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis illum in ipsum commodi quod delectus quas odit, minus ex totam culpa laborum voluptate tempore impedit deserunt nihil atque nobis rem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam distinctio aliquid neque totam minima iure quos corrupti, ad nisi velit, a voluptate enim sapiente numquam magni asperiores suscipit cum vel! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem molestiae, atque sunt reiciendis ea facere modi fugit rerum. Cupiditate nam unde delectus esse vitae officia, non debitis voluptate harum perspiciatis";
  
   echo $paragraph;

   echo '<br/>';

   echo '<hr/>';

   $stringArray = explode(".", $paragraph);

   var_dump($stringArray);

   echo '<hr/>';

   forEach($stringArray as $paragraphPiece){

      echo "<p>$paragraphPiece</p>";
      
   };

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack_5</title>
</head>
<body>
   


</body>
</html>
