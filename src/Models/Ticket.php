<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\TicketReply;
use Morilog\Jalali\Jalalian;
use App\Models\TicketAttachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $attributes = [
        'OfficerID' => 1,
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'UserID' );
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryID');
    }
    public function ticketAtachment()
    {
        return $this->hasMany(TicketAttachment::class, 'TicketID');
    }
    public function ticketReply()
    {
        return $this->hasMany(TicketReply::class, 'TicketID');
    }
    protected $appends = ['created_at_jalali'];

    public function getCreatedAtJalaliAttribute()
    {
        return Jalalian::fromDateTime($this->created_at)->format('Y-m-d');
    }

}
