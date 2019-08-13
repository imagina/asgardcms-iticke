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
}
