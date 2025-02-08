<?php

namespace App\Repositories;

use App\Models\TicketLog;

class TicketLogRepository
{
    protected $model;

    public function __construct(TicketLog $ticketLog)
    {
        $this->model = $ticketLog;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }
}
