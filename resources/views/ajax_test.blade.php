<?php

$output=exec('python test.py');
$array = explode(',', $output);
foreach ($array as $value) {
  echo $value."</br>";
}