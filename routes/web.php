<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainController@index')->name('welcome');

Route::get('/about_us', 'MainController@aboutUs')->name('about.us');
Route::get('/account_error_page','MainController@accountError')->name('account.error');


// USERS ROUTE

Route::middleware(['auth'])->prefix('user')->group(function () {

    Route::get('/dashboard', 'HomeController@dash')->name('user.dashboard');
    // TARNSFERS ROUTE BEGIN
    Route::get('/transfer', 'TransferController@transfer')->name('make.transfer');
    Route::post('/user_transfer_details', 'TransactionsController@usertransferDetails')->name('usertransfer.details');
    Route::get('/user_transfer_successful', 'TransactionsController@usertransferSuccessful')->name('usertransfer.successful');
    // TRANSFERS ROUTE END

    Route::get('/transactions', 'TransactionsController@transactions')->name('user.transactions');

    Route::get('/profile', 'UserController@profile')->name('user.profile');

    Route::get('/security', 'SecurityController@security')->name('security');

    Route::get('/payment_method', 'PaymentMethodController@paymentMethod')->name('payment.method');

    Route::get('/see_all_notifications', 'NotifyController@seeallNotify')->name('seeall.notify');
    Route::get('/notifications', 'NotifyController@notifications')->name('notifications');
    Route::get('/need_help', 'NotifyController@needHelp')->name('need.help');

});


// ADMIN ROUTE

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/admin_dashboard', 'AdminDashboardController@admin')->name('admin');

    Route::get('/open_account','OpenAzaController@openAza')->name('open.aza');
    Route::post('/user_details','OpenAzaController@userDetails')->name('user.details');

    Route::get('/all_users', 'AllusersController@allUsers')->name('all.users');
    Route::get('/delete_users/{id}', 'AllusersController@deleteUsers')->name('delete.users');

    Route::get('/admin_transfer', 'TransactionsController@newTransafer')->name('new.transfer');
    Route::post('/transfer_details', 'TransactionsController@transferDetails')->name('transfer.details');
    Route::get('/transfer_successful', 'TransactionsController@transferSuccessful')->name('transfer.successful');

    Route::get('/new_withdrawal', 'TransactionsController@newWithdrawal')->name('new.withdrawal');
    Route::post('/withdrawal_details', 'TransactionsController@withdrawalDetails')->name('withdrawal.details');
    Route::get('/withdrawal_successful', 'TransactionsController@withdrawalSuccessful')->name('withdrawal.successful');
});
