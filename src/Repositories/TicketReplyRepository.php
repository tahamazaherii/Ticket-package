<?php
namespace App\Repositories;

use App\Models\TicketReply;

class TicketReplyRepository
{
    protected $model;

    public function __construct(TicketReply $ticketReply)
    {
        $this->model = $ticketReply;
    }
    public function create($data)
    {
        return $this->model->create($data);
    }


}
