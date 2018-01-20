<?php


Route::get('/',[
    'uses' => 'EcommerceController@index',
    'as' => '/'
 ]);


Route::get('/category-product',[
    'uses' => 'EcommerceController@categoryProduct',
    'as' => 'category-product'
]);

Route::get('/category-product-Men',[
    'uses' => 'EcommerceController@categoryProductMen',
    'as' => 'category-product-Men'
]);


Route::get('/short-codes',[
    'uses' => 'EcommerceController@shortCodes',
    'as' => 'short-codes'
]);


Route::get('/singleProduct',[
    'uses' => 'EcommerceController@singleProduct',
    'as' => 'singleProduct'
]);


Route::get('/mail',[
    'uses' => 'EcommerceController@mail',
    'as' => 'mail'
]);



Route::get('/checkout',[
    'uses' => 'EcommerceAdminController@checkout',
    'as' => 'checkout'
]);


Route::get('/login',[
    'uses' => 'EcommerceAdminController@login',
    'as' => 'login'
]);



Route::get('/registered',[
    'uses' => 'EcommerceAdminController@registered',
    'as' => 'registered'
]);


















