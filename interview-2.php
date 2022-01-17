<?php

class angka{};
// creating object
$object1 = new angka();
$object2 = new angka();
$objectBaru = new angka();

// object 1
$object1->satu = "satu";
$object1->dua = "dua";
$object1->tiga = "tiga";
$object1->lima = "lima";

// object 2
$object2->tiga = "tiga";
$object2->empat = "empat";
$object2->lima = "lima";
$object2->enam = "enam";

// looping object for matching value
foreach($object1 as $data1Key => $data1Value){
  foreach($object2 as $data2Key => $data2Value){
    if($data1Value == $data2Value) {
      $objectBaru->{$data1Value} = $data1Value;
    }
  }
}

// convert object to Array
$objectBaru = get_object_vars($objectBaru);
// shorting array
ksort($objectBaru);
// displaying result
foreach($objectBaru as $key => $value){
  echo $value." ";
}
echo PHP_EOL;