<?php
echo "welcome to multi Damitial Array in php";
$multidim = array(array(1,2,3,4),
           array(4,5,7,8),
           array(3,4,5,7));
          // echo var_dump($multidim )
          echo "<br>";
          echo $multidim [1][2];
          for ($i=0; $i < count($multidim); $i++) { 
            var_dump($multidim[$i]);
            echo "<br>";
}
?>

<?php

$animals = array("snakes", "lizards", "dogs", "Humans");
echo var_dump($animals);
?>