<?php

require_once MODELS . "agentModel.php";

$action= "";
$agent = "";

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

// EDIT AGENT
function editAgent() {
  if(isset($_GET["agent_code"])) {
    $agent_code = $_GET["agent_code"];
    $agent= bringAgentInfo($agent_code);
  }
  
  require_once VIEWS . "editAgent/editAgent.php";
}

function updateAgent() {
  header("location: ./index.php");
  echo $_POST["agent_name"];
}

 function deleteAgent() {
   require_once VIEWS . "deleteAgent/deleteAgent.php";
   echo $agent_code;
 }

 function confirmDelete() {
echo $_GET["agent_code"];
  if(isset($_GET["agent_code"])) {
     deleteFromDb($_GET["agent_code"]);
  }
 getAllAgents();
 }

function error($errorMsg)
{
    require_once VIEWS . "/error/error.php";
}