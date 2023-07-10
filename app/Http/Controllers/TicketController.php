<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Repositories\TicketRepository;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $tickets;
    public function __construct(TicketRepository $tickets){
        $this->tickets = $tickets;
    }

    public function index()
    {
        $ticket = $this->tickets->index();
        return response()->json($ticket);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = $this->tickets->store($request->user_id, $request->status, $request->description);
        return response()->json($ticket);
    }

    /**
     * Display the specified resource.
     */
    public function show($ticket_id)
    {
        $ticket = $this->tickets->show($ticket_id);
        return response()->json($ticket);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $ticket_id)
    {
        $ticket = $this->tickets->update($ticket_id, $request->user_id, $request->status, $request->description);
        return response()->json($ticket);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ticket_id)
    {
        $ticket = $this->tickets->delete($ticket_id);
        return $ticket;
    }
}
