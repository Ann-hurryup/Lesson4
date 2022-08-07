<?php
  $a = rand(0, 100);
  $b = rand(0, 100);
  echo "$a + $b = ", ($a + $b);

  echo "<h2>Задача 2</h2><br>";

  $str1= "Hello";
  $str2= "world";
  $res = $str1 . ' ' . $str2;
  echo $res;

  echo "<h2>Задача 3</h2><br>";

  $type_animal = "dog";
  $dog = "Шарик";
  $cat = "Барсик";
  $fish = "Немо";
  
  if (isset($$type_animal)) {
   echo $$type_animal;
  } else {
       echo "error";
  }