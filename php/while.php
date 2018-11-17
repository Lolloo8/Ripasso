<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>While</title>
  </head>
  <body>
    <?php
$n = 1;
while ($n <= 10) {
  echo $n."<br>";
  $n++;
}
$a= 3;
while ($a <= 10) {
  echo $a*$n."<br>";
  $a++;
}


$cars = array("Mercedes","Volvo","Fiat", "Audi","Ferrari");
var_dump($cars);

$car = 0;

while ($car < count($cars)) {
  echo $cars[$car];
  $car++;
}
     ?>
  </body>
</html>
