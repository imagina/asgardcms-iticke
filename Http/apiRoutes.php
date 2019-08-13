<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => '/iticke'/*,'middleware' => ['auth:api']*/], function (Router $router) {
//======   Ticket
  require('ApiRoutes/ticketRoutes.php');
});
