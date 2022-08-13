<?php


use App\Http\Controllers\Items\ItemsController;
use App\Http\Controllers\Items\ItemController;
use Illuminate\Support\Facades\Route;

Route::get("list",[ItemsController::class,'list']);
Route::post("create",[ItemController::class,'create']);
Route::get("get/{id}",[ItemController::class,'get']);
Route::delete("destroy/{id}",[ItemController::class,'destroy']);
Route::put("update/{id}",[ItemController::class,'update']);