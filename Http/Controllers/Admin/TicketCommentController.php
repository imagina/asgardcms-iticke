<?php

namespace Modules\Iticke\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Iticke\Entities\TicketComment;
use Modules\Iticke\Http\Requests\CreateTicketCommentRequest;
use Modules\Iticke\Http\Requests\UpdateTicketCommentRequest;
use Modules\Iticke\Repositories\TicketCommentRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TicketCommentController extends AdminBaseController
{
    /**
     * @var TicketCommentRepository
     */
    private $ticketcomment;

    public function __construct(TicketCommentRepository $ticketcomment)
    {
        parent::__construct();

        $this->ticketcomment = $ticketcomment;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$ticketcomments = $this->ticketcomment->all();

        return view('iticke::admin.ticketcomments.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('iticke::admin.ticketcomments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateTicketCommentRequest $request
     * @return Response
     */
    public function store(CreateTicketCommentRequest $request)
    {
        $this->ticketcomment->create($request->all());

        return redirect()->route('admin.iticke.ticketcomment.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('iticke::ticketcomments.title.ticketcomments')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  TicketComment $ticketcomment
     * @return Response
     */
    public function edit(TicketComment $ticketcomment)
    {
        return view('iticke::admin.ticketcomments.edit', compact('ticketcomment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TicketComment $ticketcomment
     * @param  UpdateTicketCommentRequest $request
     * @return Response
     */
    public function update(TicketComment $ticketcomment, UpdateTicketCommentRequest $request)
    {
        $this->ticketcomment->update($ticketcomment, $request->all());

        return redirect()->route('admin.iticke.ticketcomment.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('iticke::ticketcomments.title.ticketcomments')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  TicketComment $ticketcomment
     * @return Response
     */
    public function destroy(TicketComment $ticketcomment)
    {
        $this->ticketcomment->destroy($ticketcomment);

        return redirect()->route('admin.iticke.ticketcomment.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('iticke::ticketcomments.title.ticketcomments')]));
    }
}
