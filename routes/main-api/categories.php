<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Categories\CategoriesController;
use App\Http\Controllers\Categories\CategoryController;

Route::get("list",[CategoriesController::class,'list']);
Route::post("create",[CategoryController::class,'create']);
Route::get("get/{id}",[CategoryController::class,'get']);
Route::delete("destroy/{id}",[CategoryController::class,'destroy']);
Route::put("update/{id}",[CategoryController::class,'update']);