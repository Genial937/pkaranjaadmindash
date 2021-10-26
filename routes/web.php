<?php

use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\logoutController;
use App\Http\Controllers\categories\categoriesControloler;
use App\Http\Controllers\categories\subCategoriesController;
use App\Http\Controllers\customers\customerController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\offers\offersController;
use App\Http\Controllers\orders\ordersController;
use App\Http\Controllers\organization\organizationController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\pin\pinController;
use App\Http\Controllers\products\productController;
use App\Http\Controllers\profile\profileController;
use App\Http\Controllers\reports\reportsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\sales\areasController;
use App\Http\Controllers\sales\collectionPointsController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\UpdatesController;
use App\Http\Controllers\users\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('login', loginController::class);
Route::middleware(['auth'])->group(function () {
    Route::resource('/', dashboardController::class);
    Route::resource('sales-area', areasController::class);
    Route::resource('collection-points', collectionPointsController::class);
    Route::resource('orders', ordersController::class);
    Route::resource('products', productController::class);
    Route::resource('customers', customerController::class);
    Route::resource('reports', reportsController::class);
    Route::resource('profile', profileController::class);
    Route::resource('pin', pinController::class);
    Route::resource('organizations', organizationController::class);
    Route::resource('categories', categoriesControloler::class);
    Route::resource('sub_categories', subCategoriesController::class);
    Route::resource('offers', offersController::class);
    Route::resource('logout', logoutController::class);
    Route::resource('survey', SurveyController::class);
    Route::resource('updates', UpdatesController::class);
    Route::group(['middleware' => ['role:superAdmin']], function () {
        Route::resource('users', userController::class);
        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });
});
