<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>For</title>
  </head>
  <body>
    <?php
for($i=0; $i<=12;$i++){
  if($i == 8){
    echo "Viva il numero $i <br>";
    continue;
  }
  echo "questo è il numero ".$i."<br>";
}

//Tabelline

$n=1;
  for ($n=0; $n<11 ; $n++) {
    for ($c=0; $c<=10 ; $c++) {
   echo  $c*$n;
    }
echo "<br>";
  }
     ?>
  </body>
</html>
