<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::apiResource('produtos', ProdutoController::class);

Route::get('/teste', function () {
    return 'API OK';
});

