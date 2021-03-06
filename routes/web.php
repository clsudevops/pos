<?php

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

Route::get('/', function () {
    return view('pages.index');
});

Auth::routes();

// Route::get('/admin/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('dashboard', 'Admin\DashboardController')->only([
            'index','show','create','edit'
        ]);
        Route::resource('customers', 'Admin\CustomersController')->only([
            'index','show','create','edit'
        ]);
        Route::resource('items', 'Admin\ItemsController')->only([
            'index','show','create','edit'
        ]);
        Route::resource('transactions', 'Admin\TransactionsController')->only([
            'index','show','create','edit'
        ]);
        Route::resource('prices-rules', 'Admin\PriceController')->only([
            'index','show','create','edit'
        ]);
        Route::resource('suppliers', 'Admin\SuppliersController')->only([
            'index','show','create','edit'
        ]);
        Route::resource('expenses', 'Admin\ExpensesController')->only([
            'index','show','create','edit'
        ]);
        Route::resource('employees', 'Admin\EmployeesController')->only([
            'index','show','create','edit'
        ]);
        Route::resource('stores', 'Admin\StoresController')->only([
            'index','show','create','edit'
        ]);
        Route::resource('sales', 'Admin\SalesController')->only([
            'index','show','create','edit'
        ]);
        Route::resource('reports', 'Admin\ReportsController')->only([
            'index','show','create','edit'
        ]);
    });
});


// Route::get('/{vue_capture?}', function () {
//     return view('home');
//   })->where('vue_capture', '[\/\w\.-]*');