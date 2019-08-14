<?php

namespace Modules\Iticke\Repositories\Cache;

use Modules\Iticke\Repositories\TicketCommentRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTicketCommentDecorator extends BaseCacheDecorator implements TicketCommentRepository
{
    public function __construct(TicketCommentRepository $ticketcomment)
    {
        parent::__construct();
        $this->entityName = 'iticke.ticketcomments';
        $this->repository = $ticketcomment;
    }
}
