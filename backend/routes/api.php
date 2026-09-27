<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventIngestionController;
Route::prefix('v1')->group(function () {
    Route::post('/events/ingest', [EventIngestionController::class, 'store']);
    Route::get('/alerts', function() { return response()->json([['id' => 1, 'rule' => 'Brute Force SSH', 'status' => 'open']]); });
});
