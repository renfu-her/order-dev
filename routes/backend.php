<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\IndexAdminApiController;


route::group(['prefix' => 'backend'], function () {
    route::get('/', [IndexAdminApiController::class, 'index']);
});
