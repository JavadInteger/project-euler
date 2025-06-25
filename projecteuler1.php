<?php
// PHP
  $result = 0;
  for ($i = 0; $i < 1000; $i++)
  {
    if ((($i % 3) == 0) || (($i % 5) == 0))
    {
      $result = $result + $i;
    }
  }
  echo "The result is: " . $result;

?>
