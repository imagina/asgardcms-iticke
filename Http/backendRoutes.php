<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/iticke'], function (Router $router) {
    $router->bind('ticket', function ($id) {
        return app('Modules\Iticke\Repositories\TicketRepository')->find($id);
    });
    $router->get('tickets', [
        'as' => 'admin.iticke.ticket.index',
        'uses' => 'TicketController@index',
        'middleware' => 'can:iticke.tickets.index'
    ]);
    $router->get('tickets/create', [
        'as' => 'admin.iticke.ticket.create',
        'uses' => 'TicketController@create',
        'middleware' => 'can:iticke.tickets.create'
    ]);
    $router->post('tickets', [
        'as' => 'admin.iticke.ticket.store',
        'uses' => 'TicketController@store',
        'middleware' => 'can:iticke.tickets.create'
    ]);
    $router->get('tickets/{ticket}/edit', [
        'as' => 'admin.iticke.ticket.edit',
        'uses' => 'TicketController@edit',
        'middleware' => 'can:iticke.tickets.edit'
    ]);
    $router->put('tickets/{ticket}', [
        'as' => 'admin.iticke.ticket.update',
        'uses' => 'TicketController@update',
        'middleware' => 'can:iticke.tickets.edit'
    ]);
    $router->delete('tickets/{ticket}', [
        'as' => 'admin.iticke.ticket.destroy',
        'uses' => 'TicketController@destroy',
        'middleware' => 'can:iticke.tickets.destroy'
    ]);
    $router->bind('ticketcomment', function ($id) {
        return app('Modules\Iticke\Repositories\TicketCommentRepository')->find($id);
    });
    $router->get('ticketcomments', [
        'as' => 'admin.iticke.ticketcomment.index',
        'uses' => 'TicketCommentController@index',
        'middleware' => 'can:iticke.ticketcomments.index'
    ]);
    $router->get('ticketcomments/create', [
        'as' => 'admin.iticke.ticketcomment.create',
        'uses' => 'TicketCommentController@create',
        'middleware' => 'can:iticke.ticketcomments.create'
    ]);
    $router->post('ticketcomments', [
        'as' => 'admin.iticke.ticketcomment.store',
        'uses' => 'TicketCommentController@store',
        'middleware' => 'can:iticke.ticketcomments.create'
    ]);
    $router->get('ticketcomments/{ticketcomment}/edit', [
        'as' => 'admin.iticke.ticketcomment.edit',
        'uses' => 'TicketCommentController@edit',
        'middleware' => 'can:iticke.ticketcomments.edit'
    ]);
    $router->put('ticketcomments/{ticketcomment}', [
        'as' => 'admin.iticke.ticketcomment.update',
        'uses' => 'TicketCommentController@update',
        'middleware' => 'can:iticke.ticketcomments.edit'
    ]);
    $router->delete('ticketcomments/{ticketcomment}', [
        'as' => 'admin.iticke.ticketcomment.destroy',
        'uses' => 'TicketCommentController@destroy',
        'middleware' => 'can:iticke.ticketcomments.destroy'
    ]);
// append


});
