<?php

use Src\Routing\Route;
use App\Controllers\PageController;


Route::get('/home', PageController::index());
