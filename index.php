<?php
require "DB/Connect.php";
require "View/Error/error.php";


$sql    = "SELECT `client_id`,`client_name`,`client_lastname` FROM `client`";
$query  = $pdo->prepare($sql);
$query->execute();

$Clients = $query->fetch(PDO::FETCH_ASSOC);


require "View/indexView.php";