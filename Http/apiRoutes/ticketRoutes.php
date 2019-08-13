<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => '/tickets'/*,'middleware' => ['auth:api']*/], function (Router $router) {
  $router->post('/', [
    'as' => 'api.iticke.tickets.store',
    'uses' => 'TickeApiController@create',
  ]);
  $router->get('/{criteria}', [
    'as' => 'api.iticke.tickets.show',
    'uses' => 'TickeApiController@show',
  ]);
  $router->get('/', [
    'as' => 'api.iticke.tickets.index',
    'uses' => 'TickeApiController@index',
  ]);
  $router->put('/{criteria}', [
  'as' => 'api.iticke.tickets.update',
    'uses' => 'TickeApiController@update',
  ]);
  $router->delete('/{criteria}', [
    'as' => 'api.iticke.tickets.delete',
    'uses' => 'TickeApiController@delete',
  ]);

});
