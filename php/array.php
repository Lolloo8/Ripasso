<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array</title>
    <style media="screen">
      .bo{width:30%;float:left;}
      .bo1{float:right;width:30%}      }
    </style>
  </head>
  <body>



<div class="bo">
<h1>Array Indicizzato</h1>

<?php
/*Array indicizzato*/
$mesi = array("Gennaio","Febbraio","Marzo" ,"Aprile", "Maggio", "Giugno", "Luglio", "Agosto","Settembre","Ottobre", "Novembre", "Dicembre");
echo "Il primo mese dell' anno è ". $mesi[0]."<br>";

echo "Ci sono ".count($mesi)." mesi in un anno.";
array_push($mesi,"merzaio");//Aggiungi in coda
var_dump($mesi);
unset($mesi[12]);
var_dump($mesi);
foreach ($mesi as $chiave => $valore) {
  echo $chiave." ".$valore."<br>";
}
?>
</div>
<div class="bo1">
<h1>Array Associativo</h1>
<?php
/*Array Associativo*/
$eta = array(
  "Piero" => "35",
  "Marco" => "24",
  "Lorenzo" => "65",
  "Mauro" => "35",
  "Gino" => "18",
);

echo $eta["Piero"];
var_dump($eta);
unset($eta["Piero"]);
var_dump($eta);

foreach ($eta as $key =>$value) {
  echo $key." ".$value."<br>";
}

 ?>
</div>
</body>
</html>
