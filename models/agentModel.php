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