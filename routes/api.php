<?php

use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\StoreHouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthUserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//register user
Route::post('/register',[AuthUserController::class,'register']);
Route::post('login',[AuthUserController::class,'login']);
Route::middleware('auth:sanctum')->group(function(){
    Route::post('logout',[AuthUserController::class,'logout']);
});
//register owner
Route::post('/registerHome',[StoreHouseController::class,'register']);
Route::post('loginHome',[StoreHouseController::class,'login']);
Route::middleware('auth:sanctum')->group(function(){
    Route::post('logoutHome',[StoreHouseController::class,'logout']);

});
//أدوية
Route::get('getDrug',[StoreHouseController::class,'getDrug']);
Route::get('getClass',[AuthUserController::class,'getClass']);
Route::post('/search/{commercialName}', [DrugController::class, 'search']);
Route::post('/getOneDrug/{id}', [DrugController::class, 'getOneDrug']);



//order
Route::post('/store/{id}', [\App\Http\Controllers\BasketController::class, 'store']);








Route::post('/addDrug', [DrugController::class, 'addDrug']);
Route::get('/show/{classifications_Id}', [ClassificationController::class, 'index']);
Route::get('/storeDrug/{id}', [DrugController::class, 'storeDrug']);
Route::get('/pharmacist/{id}/store/{id}', [DrugController::class, 'pharmacistMedicines']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
