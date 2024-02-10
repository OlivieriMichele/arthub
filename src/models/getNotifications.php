<?php


include_once('../db/database.php');


$userID = 1; // $_GET['userID'];

$database = new Database();
$notifications = $database->getNotifications($userID); 


// Return notifications as JSON
echo json_encode($notifications);
?>
