<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/historia/{comunidade}', function ($comunidade) {

    $view = 'historia.' . $comunidade;

    if (view()->exists($view)) {
        return view($view);
    }

    $view = 'comunidades.' . $comunidade;

    if (!view()->exists($view)) {
        abort(404);
    }

    return view($view);
});

Route::get('/culinaria/{comunidade}', function ($comunidade) {

    $view = 'culinaria.' . $comunidade;

    if (view()->exists($view)) {
        return view($view);
    }

    abort(404);
});

Route::get('/artesanato/{comunidade}', function ($comunidade) {

    $view = 'artesanato.' . $comunidade;

    if (view()->exists($view)) {
        return view($view);
    }

    abort(404);
});

Route::get('/costumes/{comunidade}', function ($comunidade) {

    $view = 'costumes.' . $comunidade;

    if (view()->exists($view)) {
        return view($view);
    }

    abort(404);
});

Route::get('/agricultura/{comunidade}', function ($comunidade) {

    $view = 'agricultura.' . $comunidade;

    if (view()->exists($view)) {
        return view($view);
    }

    abort(404);
});

Route::get('/estatistica/{comunidade}', function ($comunidade) {

    $view = 'estatistica.' . $comunidade;

    if (view()->exists($view)) {
        return view($view);
    }

    abort(404);
});

Route::get('/comunidades/{comunidade}', function ($comunidade) {
    $view = 'comunidades.' . $comunidade;

    if (!view()->exists($view)) {
        abort(404);
    }

    return view($view);
});

Route::get('/sobre', function () {
    return view('sobre');
});
