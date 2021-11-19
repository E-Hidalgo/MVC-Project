<?php

require_once MODELS . "employeeModel.php";

$action= "";

if(isset($_GET["action"])) {
$action= $_GET["action"];
}

if(function_exists($action)) {
  echo "si existe";
  call_user_func($action);
} else {
  echo "no existe";
}

function getAllEmployees(){
  echo "dentro de la función";
};