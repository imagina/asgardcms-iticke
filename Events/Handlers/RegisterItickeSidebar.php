<?php

namespace Modules\Iticke\Events\Handlers;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Events\BuildingSidebar;
use Modules\User\Contracts\Authentication;

class RegisterItickeSidebar implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    public function handle(BuildingSidebar $sidebar)
    {
        $sidebar->add($this->extendWith($sidebar->getMenu()));
    }

    /**
     * @param Menu $menu
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('iticke::itickes.title.itickes'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('iticke::tickets.title.tickets'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.iticke.ticket.create');
                    $item->route('admin.iticke.ticket.index');
                    $item->authorize(
                        $this->auth->hasAccess('iticke.tickets.index')
                    );
                });
                $item->item(trans('iticke::ticketcomments.title.ticketcomments'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.iticke.ticketcomment.create');
                    $item->route('admin.iticke.ticketcomment.index');
                    $item->authorize(
                        $this->auth->hasAccess('iticke.ticketcomments.index')
                    );
                });
// append


            });
        });

        return $menu;
    }
}
