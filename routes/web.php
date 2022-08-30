<?php
// namespace App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "w eb" middleware group. Now create something great!
|
*/



Auth::routes();

// dashboard controller
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard2', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashborad2');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

// Products controller
Route::get('/AddNewProduct', [App\Http\Controllers\DashboardController::class, 'AddNewProduct'])->name('AddNewProduct');
Route::post('/productStore', [App\Http\Controllers\DashboardController::class, 'productstore'])->name('productStore');
// Product list and product details in table
Route::get('/productDetails', [App\Http\Controllers\DashboardController::class, 'productDetails'])->name('productDetails');
Route::get('/productEdit', [App\Http\Controllers\DashboardController::class, 'productEdit'])->name('productEdit');
Route::post('/productEdited', [App\Http\Controllers\DashboardController::class, 'productedited'])->name('productEdited');
Route::get('/productDelete', [App\Http\Controllers\DashboardController::class, 'productdelete'])->name('productDelete');
Route::post('/productDeleted', [App\Http\Controllers\DashboardController::class, 'productdeleted'])->name('productDeleted');

// Invoices controller
Route::get('/createNewInvoice', [App\Http\Controllers\DashboardController::class, 'createNewInvoice'])->name('createNewInvoice');
// Route::get('/createOrder', [App\Http\Controllers\DashboardController::class, 'createorder'])->name('createOrder');
Route::get('/multiOrder', [App\Http\Controllers\DashboardController::class, 'multiorder'])->name('multiOrder');

Route::get('/productCategory', [App\Http\Controllers\DashboardController::class, 'productcategory'])->name('productCategory');
Route::post('/orderStore', [App\Http\Controllers\DashboardController::class, 'orderstore'])->name('orderStore');
Route::post('/products_order', [App\Http\Controllers\DashboardController::class, 'products_order'])->name('products_order');
// invoice Format
Route::get('/invoiceFormat', [App\Http\Controllers\DashboardController::class, 'invoiceformat'])->name('invoiceFormat');
Route::get('/invoiceData', [App\Http\Controllers\DashboardController::class, 'invoicedata'])->name('invoiceData');

Route::get('/invoiceDetails', [App\Http\Controllers\DashboardController::class, 'invoiceDetails'])->name('invoiceDetails');



// Vendors Controller 
Route::get('/addNewBuyer', [App\Http\Controllers\DashboardController::class, 'addNewBuyer'])->name('addNewBuyer');
Route::post('/buyerStore', [App\Http\Controllers\DashboardController::class, 'buyerstore'])->name('buyerStore');
// update, edit and delete of existing Vendor
Route::get('/buyerDetails', [App\Http\Controllers\DashboardController::class, 'buyerDetails'])->name('buyerDetails');
Route::get('/vendorEdit', [App\Http\Controllers\DashboardController::class, 'vendoredit'])->name('vendorEdit');
Route::post('/vendorEdited', [App\Http\Controllers\DashboardController::class, 'vendoredited'])->name('vendorEdited');
Route::get('/vendorDelete', [App\Http\Controllers\DashboardController::class, 'vendordelete'])->name('vendorDelete');
Route::post('/vendorDeleted', [App\Http\Controllers\DashboardController::class, 'vendordeleted'])->name('vendorDeleted');


//add new customers and store reoute
Route::get('/addNewCustomer', [App\Http\Controllers\DashboardController::class, 'addnewcustomer'])->name('addNewCustomer');
Route::post('/customerStore', [App\Http\Controllers\DashboardController::class, 'customerstore'])->name('customerStore');
// update, edit and delete of existing customer
Route::get('/customerDetails', [App\Http\Controllers\DashboardController::class, 'customerdetails'])->name('customerDetails');
Route::get('/customerEdit', [App\Http\Controllers\DashboardController::class, 'customeredit'])->name('customerEdit');
Route::post('/customerEdited', [App\Http\Controllers\DashboardController::class, 'customeredited'])->name('customerEdited');
Route::get('/customerDelete', [App\Http\Controllers\DashboardController::class, 'customerdelete'])->name('customerDelete');
Route::post('/customerDeleted', [App\Http\Controllers\DashboardController::class, 'customerdeleted'])->name('customerDeleted');

// Sales Report Controller
Route::get('/report', [App\Http\Controllers\DashboardController::class, 'salesReport'])->name('report');

// csvexport route 
Route::get('/csvExport', [App\Http\Controllers\csvConntroller::class, 'csvexport'])->name('csvExport');

// Custom Log in
Route::get('/Login', [App\Http\Controllers\CustomAuthController::class, 'login'])->name('Login');
Route::post('/Custom-login', [App\Http\Controllers\CustomAuthController::class, 'customlogin'])->name('Custom-login');

// custom Register
Route::get('/Register', [App\Http\Controllers\CustomAuthController::class, 'register'])->name('Register');
Route::post('/Custom-register', [App\Http\Controllers\CustomAuthController::class, 'customregister'])->name('Custom-register');
Route::get('/Signout', [App\Http\Controllers\CustomAuthController::class, 'signout'])->name('Signout');
