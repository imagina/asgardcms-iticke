<?php

namespace Modules\Iticke\Entities;

/**
 * Class Status
 * @package Modules\Iticke\Entities
 */
class Status
{

    const OPEN = 0;//ABIERTO
    const PENDING = 1;//PENDIENTE
    const CLOSED = 1;//CERRADO

    /**
     * @var array
     */
    private $statuses = [];

    public function __construct()
    {
        $this->statuses = [
            self::OPEN => trans('iticke::status.open'),
            self::PENDING => trans('iticke::status.pending'),
            self::CLOSED => trans('iticke::status.closed'),
        ];
    }

    /**
     * Get the available statuses
     * @return array
     */
    public function lists()
    {
        return $this->statuses;
    }

    /**
     * Get the ticket status
     * @param int $statusId
     * @return string
     */
    public function get($statusId)
    {
        if (isset($this->statuses[$statusId])) {
            return $this->statuses[$statusId];
        }

        return $this->statuses[self::OPEN];
    }
}
