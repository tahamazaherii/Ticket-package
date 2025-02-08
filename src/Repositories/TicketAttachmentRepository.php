<?php

namespace App\Repositories;

use App\Models\TicketAttachment;

class TicketAttachmentRepository
{
    protected $model;

    public function __construct(TicketAttachment $ticketAttachment)
    {
        $this->model = $ticketAttachment;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function update($id , $data)
    {
        $ticket = $this->model->findOrFail($id);
        return $ticket->update($data);
    }
}
