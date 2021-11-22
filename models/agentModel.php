<?php
require_once("helpers/dbConnection.php");

function get()
{
    $query = conn()->prepare("SELECT agent_code, agent_name, working_area, comission, phone_no, country
    FROM agents 
    -- INNER JOIN genders g ON e.gender_id = g.id
    ORDER BY agent_code ASC;");

    try {
        $query->execute();
        $agents = $query->fetchAll();
        return $agents;
    } catch (PDOException $e) {
        return [];
    }
}

function bringAgentInfo($agent_code) {
    $query = conn()->prepare("SELECT agent_code, agent_name, working_area, comission, phone_no, country
     FROM agents
     WHERE agent_code = '$agent_code'");
   
       

     try {
        $query->execute();
        $agent = $query->fetchAll();
        return $agent;
    } catch (PDOException $e) {
        return [];
    }
}

function deleteFromDb() {
    // $query = conn()->prepare("DELETE FROM agents WHERE agent_code");

    
}