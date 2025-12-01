<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\SignatureBuilder;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', SignatureBuilder::class);
