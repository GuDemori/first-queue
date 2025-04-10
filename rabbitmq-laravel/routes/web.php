<?php

use App\Jobs\MessageInQueue;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job', function () {
    MessageInQueue::dispatch();
    return 'Mensagem enviada para a fila!';
});

