<?php

namespace App\Models;

use Morilog\Jalali\Jalalian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TicketReply extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $appends = ['created_at_jalali'];

    public function getCreatedAtJalaliAttribute()
    {
        return Jalalian::fromDateTime($this->created_at)->format('Y-m-d');
    }
    public function attachments()
    {
        return $this->hasMany(TicketAttachment::class, 'ReplyID', 'id');
    }
}
