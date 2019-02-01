<?php
service();
function service(){
$data = file_get_contents("json/diseño_web.json");
$servicios = json_decode($data, true);

foreach ($servicios['Design_web'] as $service) {
  $result=$service['es'];
}
  return $result;
}
 ?>
