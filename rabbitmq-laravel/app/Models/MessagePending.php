<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessagePending extends Model
{
    protected $table = 'messages_pending';

    protected $fillable = ['content'];
}
