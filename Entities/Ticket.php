<?php

namespace Modules\Iticke\Entities;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $table = 'iticke__tickets';
    protected $fillable = [
    'subject',
    'message',
    'attached',
    'status',
    'priority',
    'type',
    'full_name',
    'phone',
    'email',
    'options'
    ];
}
