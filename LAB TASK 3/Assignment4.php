<?php
function largest($a, $b, $c) {
  $max = $a;

  if ($a >= $b && $a >= $c)
    $max = $a;
  elseif ($b >= $a && $b >= $c)
    $max = $b;
  else 
    $max = $c;
  
  echo "Largest number among $a, $b and $c is:".$max;
}

largest(100, 50, 75);
?>