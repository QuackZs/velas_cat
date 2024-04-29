<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('produto.index');
})->name('welcome');

Route::resources([
    'produto' => ProdutoController::class,
]);

