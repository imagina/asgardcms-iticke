<?php

use Modules\Iticke\Entities\Status;
use Modules\Iticke\Entities\Priority;
use Modules\Iticke\Entities\Type;


/**
 * Get Ticket status
 *
 * @param  none
 * @return Array $status
 */
if (!function_exists('iticke__getStatus')) {

    function iticke__getStatus()
    {
        $status = new Status();
        return $status;
    }
}

/**
 * Get Ticket priority
 *
 * @param  none
 * @return Array $status
 */
if (!function_exists('iticke__getPriority')) {

    function iticke__getPriority()
    {
        $priority = new Priority();
        return $priority;
    }
}

/** * Get Ticket type
 *
 * @param  none
 * @return Array $status
 */
if (!function_exists('iticke__getType')) {

    function iticke__getType()
    {
        $type = new Type();
        return $type;
    }
}

