<?php

namespace App\Repositories;

use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class TicketRepository
{
    public function index()
    {
        $data = Ticket::paginate(20);
        return $data;
    }

    public function store($user_id, $status, $description)
    {
        $ticket = new Ticket;
        $ticket->user_id = $user_id;
        $ticket->status = $status;
        $ticket->description = $description;
        $ticket->save();
        return $ticket;
    }

    public function show($ticket_id)
    {
        $ticket = Ticket::where('id', $ticket_id)->with('user')->get();
        return $ticket;
    }

    public function update($ticket_id, $user_id, $status, $description)
    {
        $ticket = Ticket::find($ticket_id);
        $ticket->user_id = $user_id;
        $ticket->status = $status;
        $ticket->description = $description;
        $ticket->save();
        return $ticket;
    }

    public function delete($id)
    {
        $humidity = Ticket::find($id);
        $humidity->delete();
        return response("Ticket eliminado correctamente", 200);
    }
  
}