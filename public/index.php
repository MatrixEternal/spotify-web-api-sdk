<?php

error_reporting(E_ALL);

date_default_timezone_set("Europe/Berlin");

require_once dirname(__DIR__) . "/bootstrap.php";

use SpotifyAPI\Http\Response;

$response = new Response();
$response->headers();

require_once "router.php";

?>

