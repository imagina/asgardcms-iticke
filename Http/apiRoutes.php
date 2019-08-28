<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => '/iticke/v1'/*,'middleware' => ['auth:api']*/], function (Router $router) {
//======   Ticket
  require('ApiRoutes/ticketRoutes.php');
});
