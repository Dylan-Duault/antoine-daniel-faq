<?php

use Illuminate\Support\Facades\Route;
use App\Models\FaqItem;

Route::get('/', [\App\Http\Controllers\FaqItemController::class, 'index'])->name('index'); 