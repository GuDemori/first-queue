<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\MessagePending;
use App\Models\MessageProcessed;


class ProcessMessage implements ShouldQueue
{
    use Queueable;

    public $connection = 'rabbitmq';

    /**
     * Create a new job instance.
     */
    public function __construct(public $messageId) {}

    /**
     * Execute the job.
     */
    public function handle()
    {
        $message = MessagePending::find($this->messageId);
        if (!$message) return;
    
        MessageProcessed::create([
            'content' => $message->content,
            'processed_at' => now(),
        ]);
    
        $message->delete();
    }
}
