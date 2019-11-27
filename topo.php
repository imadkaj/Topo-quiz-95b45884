<?php

$hoofdstad = array ("Japan" => 'Tokiyo',
'mexico' => "Mexico city", "usa" => "Washington D.C");

$c = 0;
foreach($hoofdstad as $land => $city)
{
    echo "wat is de hoofdstaat van ?". $land . "\n";
    $b = readline();
   if ($b == $city)
   {
      echo 'correct'."\n"; 
      $c++;
    } 

   else  {
       echo'incorrect', PHP_EOL;
   }
}

echo " Je hebt".$c. "van de 3 goed geraden!";