<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\aboutController;
use App\Http\Controllers\frontend\aviationController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\indexController;
use App\Http\Controllers\frontend\kohlerController;
use App\Http\Controllers\frontend\manController;
use App\Http\Controllers\frontend\mtufController;
use App\Http\Controllers\frontend\orderController;
use App\Http\Controllers\frontend\railwayController;
use App\Http\Controllers\frontend\solarController;
use App\Http\Controllers\frontend\trafficController;
use App\Http\Controllers\frontend\volvoController;
use App\Http\Controllers\frontend\yamahaController;
use App\Http\Controllers\frontend\zfController;
use App\Http\Controllers\frontend\cumminsController;

// Admin Panel

use App\Http\Controllers\adminPanel\productController;
use App\Http\Controllers\adminPanel\adminProductsController;
use App\Http\Controllers\adminPanel\categoryProductsController;
use App\Http\Controllers\adminPanel\homeProductsController;
use App\Http\Controllers\adminPanel\loginController;
use App\Http\Controllers\adminPanel\registerController;


Route::get("/", [indexController::class,'index']);
Route::get("/category", [cumminsController::class,'index']);
Route::get("/aviation", [aviationController::class,'index']);
Route::get("/about", [aboutController::class,'index']);
Route::get("/contact", [contactController::class,'index']);
Route::get("/kohler", [kohlerController::class,'index']);
Route::get("/man", [manController::class,'index']);
Route::get("/mtuf", [mtufController::class,'index']);
Route::get("/order", [orderController::class,'index']);
Route::get("/railway", [railwayController::class,'index']); 
Route::get("/solar", [solarController::class,'index']);
Route::get("/traffic", [trafficController::class,'index']);
Route::get("/volvo", [volvoController::class,'index']);
Route::get("/yamaha", [yamahaController::class,'index']);
Route::get("/zf", [zfController::class,'index']);
Route::get("/middle", [middleController::class,'index']);


// Delete

Route::get("/destroyMarine/{id}", [cumminsController::class,'destroyMarine']);
Route::get("/destroyCummins/{id}", [cumminsController::class,'destroyCummins']);
Route::get("/destroyZfs/{id}", [zfController::class,'destroyZfs']);
Route::get("/destroyRailway/{id}", [railwayController::class,'destroyRailway']); 
Route::get("/deleteTraffic/{id}", [trafficController::class,'destroyTraffic']);
Route::get("/deleteSolar/{id}", [solarController::class,'destroySolar']);
Route::get("/destroyAdmin/{id}", [loginController::class,'destroyAdmin']);


// Searching

Route::get("/searchMarine", [cumminsController::class,'search']);
Route::get("/searchRailway", [railwayController::class,'search']);
Route::get("/searchSolar", [solarController::class,'search']);
Route::get("/searchTraffic", [trafficController::class,'search']);
Route::get("/searchMtuf", [mtufController::class,'search']);
Route::get("/searchYamaha", [yamahaController::class,'search']);
Route::get("/searchMan", [manController::class,'search']);
Route::get("/searchZf", [zfController::class,'search']);
Route::get("/searchKohler", [kohlerController::class,'search']);
Route::get("/searchVolvo", [volvoController::class,'search']);

// Admin Panel

Route::get("/tables", [adminProductsController::class,'index'])->middleware('redirectIfNotAuthenticated');
Route::get("/homeProducts", [homeProductsController::class,'index'])->middleware('redirectIfNotAuthenticated');
Route::get("/homeEntries", [homeProductsController::class,'index1'])->middleware('redirectIfNotAuthenticated');
Route::get("/categoryProducts", [categoryProductsController::class,'index'])->middleware('redirectIfNotAuthenticated');
Route::get("/register", [registerController::class,'index']);   
Route::get("/marineBrands", [productController::class,'index2'])->middleware('redirectIfNotAuthenticated');
Route::get("/product", [productController::class,'index'])->middleware('redirectIfNotAuthenticated');

// Store Image 

Route::post("/product", [productController::class,'storeRailway']);
Route::post("/productMarine", [productController::class,'storeMarine']);
Route::post("/productCummins", [productController::class,'storeCummins']);
Route::post("/productZf", [productController::class,'storeZf']);
Route::post("/productSolar", [productController::class,'storeSolar']);
Route::post("/productTraffic", [productController::class,'storeTraffic']);


// Admin

Route::get("/admin", [loginController::class,'admin']);

// Check Login

Route::get("/login", [loginController::class,'index']);
Route::post("/login", [loginController::class,'login']);
Route::get("/register", [loginController::class,'register']);
Route::post("/register", [loginController::class,'registerForm']);
Route::get("/logout", [loginController::class,'logout']);

// Import

Route::post("/importTables", [mtufController::class,'importTables'])->name('excelFile');
Route::post("/importVolvo", [volvoController::class,'importTables'])->name('excelFile');
Route::post("/importMan", [manController::class, 'importTables'])->name('excelFile');
Route::post("/importYamaha", [yamahaController::class,'importTables'])->name('excelFile');
Route::post("/importKohler", [kohlerController::class,'importTables'])->name('excelFile');

?>