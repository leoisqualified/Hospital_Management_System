<?php
require 'router.php'; // Include router definitions

// Get the current URI 
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Find the route or display a 404 error
if (array_key_exists($requestUri, $routes)) {
    $routes[$requestUri](); // Call the route's associated function
} else {
    http_response_code(404);
    require './pathto404page';
}
?>
