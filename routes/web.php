<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
, 'middleware'=>'verified'
|
*/

    Route::get('frontend/home','HomeController@index')->name('home');
   // Route::get('frontend/login','Auth\LoginController@ShowLoginForm')->name('login');
    Route::get('frontend/productDetails/{slug}','HomeController@show')->name('details');
   
    Route::get('frontend/categoryWishProduct/{categoryId}','HomeController@ShowProductByCategory')
    ->name('categoryWiseProduct');
    Route::get('frontend/brandWiseProducts/{brandId}','HomeController@showProductBrandWise');
    Route::get('frontend/search','HomeController@search')->name('search');
    Route::get('frontend/token/{token}','EmailVerifictionController@verify')->name('verifyEmail');

    // User Dashboard Route
    Route::group(['prefix'=>'user-dashboard'],function(){
        Route::get('dashboard', 'UserDashboardController@index')->name('user.dashboard.index');
        Route::get('dashboard/user-details', 'UserDashboardController@show')->name('user.dashboard.show');
        Route::get('dashboard/edit', 'UserDashboardController@edit')->name('user.dashboard.edit');
        Route::patch('dashboard/update', 'UserDashboardController@update')->name('user.dashboard.update');
    });

    // Add to cart Route
    Route::group(['prefix' => 'cart'], function(){
        Route::get('frontend/cart','CartController@index')->name('cartIndex');
        Route::post('frontend/addCart','CartController@addToCart')->name('addCart');
        Route::post('frontend/addCart/update/{cartId}','CartController@updateCartQuantity');
        
        Route::get('frontend/cart/products','CartController@showCartProducts')->name('show.cart.products');
         Route::post('frontend/addCart/delete','CartController@deleteCart')->name('cart.delete');
    });
    
    //Check Out Route
    Route::group(['prefix'=> 'checkout'], function()
    {
        Route::get('checkoutInfoFirst', 'CheckoutController@index')->name('check.index');
        Route::post('checkout/order', 'CheckoutController@order')->name('check.order');
    });

Route::group(['prefix'=>'backend', 'namespace'=>'admin', 'middleware' => 'auth:admin'], function(){

     Route::get('dashboard', 'DashboardController@index')->name('dashboard');
     Route::get('product', 'ProductController@index')->name('productIndex');
     Route::get('product/create', 'ProductController@create')->name('ProductCreate');
     Route::post('product/store', 'ProductController@store')->name('productStore');
     Route::delete('product/delete/{id}', 'ProductController@delete')->name('product.delete');
     Route::get('product/show/{productId}', 'ProductController@show')->name('Product.show');
     Route::get('product/edit/{productId}', 'ProductController@edit')->name('Product.edit');
     Route::put('product/update/{productId}', 'ProductController@update')->name('Product.update');

     Route::get('category/index', 'CategoryController@index')->name('category.index');
     Route::get('category/show/{categoryId}', 'CategoryController@show')->name('category.show');
     Route::get('category/edit/{categoryId}', 'CategoryController@edit')->name('category.edit');
     Route::patch('category/update/{categoryId}', 'CategoryController@update')->name('category.update');
     Route::get('category/create', 'CategoryController@create')->name('category.create');
     Route::post('category/store', 'CategoryController@store')->name('category.store');
     Route::delete('category/delete/{id}', 'CategoryController@delete')->name('category.delete');

     Route::get('brand/index', 'BrandController@index')->name('brand.index');
     Route::get('brand/create', 'BrandController@create')->name('brand.create');
     Route::post('brand/store', 'BrandController@store')->name('brand.store');
     Route::delete('brand/delete/{id}', 'BrandController@delete')->name('brand.delete');


     Route::get('order/index', 'OrderController@index')->name('order.index');
     Route::get('order/details/{orderId}', 'OrderController@details')->name('order.details');
     Route::delete('order/delete/{cartId}', 'OrderController@delete')->name('order.product.delete');
     Route::patch('order/update_paid/{Id}', 'OrderController@updatePaid')->name('update.order.paid');
     Route::patch('order/update_complete/{Id}', 'OrderController@updateComplete')->name('update.order.complete');
     Route::delete('order/deleteFormOrderPage/{Id}', 'OrderController@orderDelete')->name('order.delete');
     Route::get('order/invoice/{orderId}', 'OrderController@invoice')->name('order.invoice');

     Route::get('slide/index', 'SlideController@index')->name('slide.index');
     Route::get('slide/create', 'SlideController@create')->name('slide.create');
     Route::post('slide/store', 'SlideController@store')->name('slide.store');
     Route::delete('slide/delete/{Id}', 'SlideController@delete')->name('slide.delete');

     Route::get('logo/index', 'LogoController@index')->name('logo.index');
     Route::get('logo/show/{logoId}', 'LogoController@show')->name('logo.show');
     Route::get('logo/edit/{logoId}', 'LogoController@edit')->name('logo.edit');
     Route::patch('logo/update/{logoId}', 'LogoController@update')->name('logo.update');


     Route::get('seo/index', 'SeoController@index')->name('seo.index');
     Route::get('seo/edit', 'SeoController@edit')->name('seo.edit');
     Route::patch('seo/update/{seoId}', 'SeoController@update')->name('seo.update');

     Route::get('socialMedia/index', 'SocialMediaController@index')->name('social.media.index');
     Route::get('socialMedia/create', 'SocialMediaController@create')->name('social.media.create');
     Route::post('socialMedia/store', 'SocialMediaController@store')->name('social.media.store');
     Route::get('socialMedia/edit/{editId}', 'SocialMediaController@edit')->name('social.media.edit');
     Route::patch('socialMedia/update/{updateId}', 'SocialMediaController@update')->name('social.media.update');
     Route::delete('socialMedia/delete/{deleteId}', 'SocialMediaController@delete')->name('social.media.delete');

});


Route::get('admin/login', 'auth\admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'auth\admin\LoginController@login')->name('admin.login.attempt');
Route::get('admin/logout', 'auth\admin\LoginController@logout')->name('admin.logout');

Route::post('admin/password-email', 'auth\admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password-reset/form', 'auth\admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

Route::get('admin/password/reset/{token}', 'auth\admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/password/reset', 'auth\admin\ResetPasswordController@reset');

Auth::routes();



