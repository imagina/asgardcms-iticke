<?php

namespace Modules\Iticke\Entities;

/**
 * Class Type
 * @package Modules\Iticke\Entities
 */
class Type
{

    const QUESTION = 0;//PREGUNTA
    const COMPLAIN = 1;//QUEJA
    const CLAIM = 2;//RECLAMO
    const REQUEST = 3;//SOLICITUD

    /**
     * @var array
     */
    private $types = [];

    public function __construct()
    {
        $this->types = [
            self::QUESTION => trans('iticke::types.question'),
            self::COMPLAIN => trans('iticke::types.complain'),
            self::CLAIM => trans('iticke::types.claim'),
            self::REQUEST => trans('iticke::types.request'),
        ];
    }

    /**
     * Get the available types
     * @return array
     */
    public function lists()
    {
        return $this->types;
    }

    /**
     * Get the ticket type
     * @param int $statusId
     * @return string
     */
    public function get($typeId)
    {
        if (isset($this->types[$typeId])) {
            return $this->types[$typeId];
        }

        return $this->types[self::QUESTION];
    }
}
