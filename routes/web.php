<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\EventController;


Route::get('/', [MainController :: class, 'index']) -> name('welcome');

// Pagine principali: Homepage e Persone
Route::get('/manage-people', [PersonController :: class, 'index']) -> name ('index.people');
Route::get('/manage-events', [EventController :: class, 'index']) -> name ('index.events');


// Creazione di una nuova persona
Route::get('/create-person', [PersonController :: class, 'create']) -> name('create.person');
Route::post('/create-person', [PersonController :: class, 'store']) -> name('store.person');


// Creazione di un nuovo evento
Route::get('/create-event', [EventController :: class, 'create']) -> name('create.event');
Route::post('/create-event', [EventController :: class, 'store']) -> name('store.event');


// Pagine dettaglio di eventi e persone
Route::get('/event/{id}', [EventController :: class, 'show']) -> name('show.event');
Route::get('/person/{id}', [PersonController :: class, 'show']) -> name('show.person');


// Pagine di modifica eventi e persone
Route::get('/event/{id}/edit', [EventController :: class, 'edit']) -> name('edit.event');
Route::put('/person/{id}/update', [PersonController :: class, 'update']) -> name('update.person');
Route::put('/event/{id}/update', [EventController :: class, 'update']) -> name('update.event');



Route::put('/event/{event}/person/{person}/detach', [EventController::class, 'detachPerson'])->name('event.person.detach');