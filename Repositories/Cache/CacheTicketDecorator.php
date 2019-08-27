<?php

namespace Modules\Iticke\Repositories\Cache;

use Modules\Iticke\Repositories\TicketRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTicketDecorator extends BaseCacheDecorator implements TicketRepository
{
    public function __construct(TicketRepository $ticket)
    {
        parent::__construct();
        $this->entityName = 'iticke.tickets';
        $this->repository = $ticket;
    }

    /**
     * List or resources
     *
     * @return collection
     */
    public function getItemsBy($params)
    {
      return $this->remember(function () use ($params) {
        return $this->repository->getItemsBy($params);
      });
    }

    /**
     * find a resource by id or slug
     *
     * @return object
     */
    public function getItem($criteria, $params)
    {
      return $this->remember(function () use ($criteria, $params) {
        return $this->repository->getItem($criteria, $params);
      });
    }
}
