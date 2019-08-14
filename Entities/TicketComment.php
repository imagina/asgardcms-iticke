<?php

namespace Modules\Iticke\Entities;

use Illuminate\Database\Eloquent\Model;

class TicketComment extends Model
{

    protected $table = 'iticke__ticketcomments';
    protected $fillable = [
    	'comment',
    	'ticket_id'
    ];
}
