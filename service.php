<?php
function service($servicio, $idioma){
echo $servicio;
$data = file_get_contents("json/".$servicio.".json");
$servicios = json_decode($data, true);

foreach ($servicios[$servicio] as $service) {
  $result=$service[$idioma];
}
echo $prueba;
  return $result;
}
?>
