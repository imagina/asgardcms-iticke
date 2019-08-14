<?php

namespace Modules\Iticke\Entities;

/**
 * Class Priority
 * @package Modules\Iticke\Entities
 */
class Priority
{

    const LOW = 0;//Baja
    const HIGH = 1;//Alta
    const CRITICAL = 1;//Crítica

    /**
     * @var array
     */
    private $priorities = [];

    public function __construct()
    {
        $this->priorities = [
            self::LOW => trans('iticke::priorities.low'),
            self::HIGH => trans('iticke::priorities.high'),
            self::CRITICAL => trans('iticke::priorities.critical'),
        ];
    }

    /**
     * Get the available priorities
     * @return array
     */
    public function lists()
    {
        return $this->priorities;
    }

    /**
     * Get the ticket status
     * @param int $statusId
     * @return string
     */
    public function get($priorityId)
    {
        if (isset($this->priorities[$priorityId])) {
            return $this->priorities[$priorityId];
        }

        return $this->priorities[self::LOW];
    }
}
