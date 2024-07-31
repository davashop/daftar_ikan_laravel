<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IkanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::get('/ikan', [IkanController::class, "index"]);

route::delete('/ikan/{id}', [IkanController::class, "destroy"]);

route::get("/ikan/create", [IkanController::class, "create"])->name("ikan.create");
route::post("/ikan", [IkanController::class, "store"])->name("ikan.store");

route::get("/ikan/{id}", [IkanController::class, "edit"]);
route::put("/ikan/{id}", [IkanController::class, "update"])->name("ikan.update");