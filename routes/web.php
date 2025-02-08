<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\TicketController;





// Route::get('/', function () {
//     return view('welcome');
// });


//route prefix AdminArticle
Route::prefix('/Ticket')->controller(TicketController::class)->name('Ticket.user.')->group(function(){
    Route::get('/list','index')->name('list');
    Route::post('/store','store')->name('store');
    Route::post('/reply/{id}','reply')->name('reply');
    Route::post('/singleTicket/{id}','singleTicket')->name('singleTicket');
});



