
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;

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


// Home

Route::get('/home/login','HomeController@login')->name('home.login');
Route::get('/','HomeController@index')->name('home.index');
Route::get('/home/contact','HomeController@contact')->name('home.contact');
Route::get('/home/help','HomeController@help')->name('home.help');
Route::get('/home/index','HomeController@home')->name('home.index');
Route::get('/home/announcement','HomeController@announcement')->name('home.announcement');
Route::get('/home/postCard','HomeController@postCard')->name('home.postCard');
Route::get('/home/chatbox','HomeController@chatbox')->name('home.chatbox');
Route::get('/home/marketplace','HomeController@marketplace')->name('home.marketplace');




Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout');
Route::get('/register', [RegistrationController::class,'register'])->name('register');


Route::group(['middleware'=>['sess']], function(){

    //admin
    Route::get('/admin/home', 'AdminHomeController@index')->name('adminHome');

    Route::get('/admin/editProfile', 'AdminHomeController@editProfile')->name('adminEditProfile');
    Route::post('/admin/editProfile/{id}', 'AdminHomeController@verifyEditProfile')->name('verifyEditProfile');

    Route::get('/admin/viewAllUserInfo', 'AdminHomeController@viewAllUserInfo')->name('adminViewAllUserInfo');

    Route::get('/admin/addAdmin', 'AdminHomeController@addAdmin')->name('addAdmin');
    Route::post('/admin/addAdmin', 'AdminHomeController@verifyAddAdmin')->name('verifyAddAdmin');

    Route::get('/admin/adminEditUserInfo/{id}', 'AdminHomeController@editUserInfo')->name('adminEditUserInfo');
    Route::post('/admin/adminEditUserInfo/{id}', 'AdminHomeController@verifyEditUserInfo')->name('verifyEditUserInfo');

    Route::get('/admin/adminDeleteUserInfo/{id}', 'AdminHomeController@deleteUserInfo')->name('adminDeleteUserInfo');


    Route::get('/admin/viewAllTransaction', 'AdminHomeController@viewAllTransaction')->name('adminViewAllTransaction');
    Route::get('/admin/userReports', 'AdminHomeController@userReports')->name('adminUserReports');

    Route::get('/admin/announcement', 'AdminHomeController@announcement')->name('adminAnnouncement');
    Route::post('/admin/announcement', 'AdminHomeController@sendAnnouncement')->name('sendAnnouncement');
    Route::get('/admin/deleteAnnouncement/{id}', 'AdminHomeController@deleteAnnouncement')->name('deleteAnnouncement');
    























    // seller
//view page
Route::get('/seller/dashboard','SellerController@home')->name('seller.dashboard');
Route::get('/seller/applyforprimeseller','SellerController@applyForPrimeSeller')->name('seller.apply.prime');
Route::get('/seller/createsellpost','SellerController@createSellPost')->name('seller.create.sell.post');
// Route::get('/seller/myposts','SellerController@myPosts')->name('seller.posts');
Route::get('/seller/statements','SellerController@statements')->name('seller.statements');
Route::get('/seller/orders','SellerController@orders')->name('seller.orders');
Route::get('/seller/contactsupport','SellerController@contactSupport')->name('seller.contact.support');
Route::get('/seller/orderdetails','SellerController@orderDetails')->name('seller.order.details');
Route::get('/seller/editsellpost','SellerController@editSellPost')->name('seller.edit.sell.post');
Route::get('/seller/editprofile','SellerController@editProfile')->name('seller.edit.profile');
Route::get('/seller/statementdetails','SellerController@statementDetails')->name('seller.statement.details');

// Route::resource('seller/product', ProductController::class);

//namespace for subfolder in controller in here seller subfolder hold the controler
//as for naming route is 'as' 'seller.' means seller.product
//prefix for url seller/product url
Route::group([
    'prefix'=>'seller',
    'namespace'=>'seller',
    'as'=>'seller.'
],function()
{
    route::resource('product','ProductController');
    route::get('product/active/{id}','productController@active')->name('product.active');
    route::get('product/deactive/{id}','productController@deactive')->name('product.deactive');

    route::resource('profile','profileController')->only('index');

    route::get('profile/edit','profileController@editProfile')->name('edit.profile');
    route::put('profile/updateprofile','profileController@updateProfile')->name('profile.update');
    route::get('profile/change/password','profileController@changePassword')->name('profile.change.password');
    route::Post('profile/update/password','profileController@updatePassword')->name('profile.update.password');
});

























    // user or buyer
    Route::get('/user/dashboard', [UserController::class,'dashboard'])->name('user.dashboard');

    Route::get('/user/profile', [UserController::class,'profile'])->name('user.profile');

    Route::get('/user/history', [UserController::class,'history'])->name('user.history');

    Route::get('/user/details', [UserController::class,'details'])->name('user.details');
    Route::get('/user/follow', [UserController::class,'follow'])->name('user.follow');

    Route::get('/user/orders', [UserController::class,'orders'])->name('user.orders');

Route::get('/user/order', [UserController::class,'order'])->name('user.order');
Route::post('/user/order', [UserController::class,'orderConfirm'])->name('user.orderConfirm');

    Route::get('/user/notification', [UserController::class,'notification'])->name('user.notification');

    Route::get('/user/messages', [UserController::class,'messages'])->name('user.messages');
    // Route::get('/user/list', [App\Http\Controllers\UserController::class,'list']);
    // Route::get('/user/create', [App\Http\Controllers\UserController::class,'create'] )->name('user.create');
    // Route::post('/user/create', [App\Http\Controllers\UserController::class,'insert'] )->name('user.insert');





});


