<?php

$Array1 = ['Satu', 'Dua', 'Tiga', 'Lima','Tuju'];
$Array2 = ['Tiga', 'Empat', 'Lima', 'Enam','Tuju'];


$results = [];
$ke = 0;
for($i = 0; $i < count($Array1); $i++){
  for ($j = 0; $j < count($Array2); $j++){
    if($Array1[$i] == $Array2[$j]){
      $results[++$ke] = $Array1[$i];
      continue 2;
    }
  }
}
asort($results);
foreach($results as $result){
  echo $result." ";
}
echo PHP_EOL;
