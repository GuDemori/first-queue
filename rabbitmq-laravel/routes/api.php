<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\MessagePending;
use App\Jobs\ProcessMessage;

Route::post('/message', function (Request $request) {
    $message = MessagePending::create([
        'content' => $request->input('content'),
    ]);

    ProcessMessage::dispatch($message->id);

    return response()->json(['message' => 'Mensagem enviada para a fila!']);
});
