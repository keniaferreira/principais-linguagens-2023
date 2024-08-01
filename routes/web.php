<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/montar-tree-map-linguagens', [\App\Http\Controllers\TreemapController::class, 'principaisLinguagensUtiliadas2023'])->name('montar.tree.map.linguagens');