<?php

namespace App\Repositories;

use App\Models\Ticket;

class TicketRepository
{
    protected $model;

    public function __construct(Ticket $ticket)
    {
        $this->model = $ticket;
    }
    public function getUserTickets($userId)
    {
        return $this->model->where('UserID', $userId)->get();
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function findById($id)
    {
        return Ticket::with('user', 'category', 'ticketAtachment', 'ticketReply.attachments')->where('id', $id)->first();
    }
    // public function updateStatus($ticket, $status)
    public function updateStatus($id,$data)
    {

        $ticket = $this->model->findOrFail($id);
        return $ticket->update($data);
    }
}
