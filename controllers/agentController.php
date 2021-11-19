<?php

require_once MODELS . "agentModel.php";

$action= "";

if(isset($_GET["action"])) {
$action= $_GET["action"];
}

if(function_exists($action)) {
  call_user_func($action);
} else {
  error("This function is not working at the moment!");
}

function getAllAgents(){
$agents = get();

if(isset($agents)) {
  require_once VIEWS . "agents/agentsDashboard.php";
} else {
  error("There was some problem with the server!");
}
  }

function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}