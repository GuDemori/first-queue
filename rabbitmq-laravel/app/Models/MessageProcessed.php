<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageProcessed extends Model
{
    protected $table = 'messages_processed';

    protected $fillable = ['content', 'processed_at'];
}
