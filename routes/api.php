<?php

// routes/api.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\MyDependentDropdownController; // Updated controller name

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'as' => 'api.v1.', 'namespace' => 'Api\\V1\\'], function() {
    Route::post('/dependent-dropdown', [MyDependentDropdownController::class, 'index'])->name('dropdown'); // Updated controller reference
});


