<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Events\TransactionsUploaded;

/*
|--------------------------------------------------------------------------
| Card API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your card. These routes
| are loaded by the ServiceProvider of your card. You're free to add
| as many additional routes to this file as your card may require.
|
*/

Route::post('/transactions', function (Request $request) {
    $path = $request->file('file')->store('transactions', 'admin');

    event(new TransactionsUploaded);
});
