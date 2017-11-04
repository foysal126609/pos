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
    return view('admin.login.login');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/category-info', 'CategoryController@categoryInfo');
Route::post('/category/new', 'CategoryController@saveCategoryInfo');
Route::get('/edit-category-info/{id}', 'CategoryController@editCategoryInfo');
Route::get('/category/published/{id}', 'CategoryController@publishedCategoryInfo');
Route::get('/category/unpublished/{id}', 'CategoryController@unPublishedCategoryInfo');
Route::post('/category/update', 'CategoryController@updateCategoryInfo');

Route::get('/brand-info', 'BrandController@brandInfo');
Route::post('/brand/new', 'BrandController@saveBrandInfo');
Route::get('/edit-brand-info/{id}', 'BrandController@editBranInfo');
Route::post('/brand/update', 'BrandController@updateBrandInfo');
Route::get('/brand/published/{id}', 'BrandController@publishedBrandInfo');
Route::get('/brand/unpublished/{id}', 'BrandController@unPublishedBrandInfo');

Route::get('/color-info', 'ColorController@colorInfo');
Route::post('/color/new', 'ColorController@saveColorInfo');
Route::get('/edit-color-info/{id}', 'ColorController@editColorInfo');
Route::post('/color/update', 'ColorController@updateColorInfo');
Route::get('/color/published/{id}', 'ColorController@publishedColorInfo');
Route::get('/color/unpublished/{id}', 'ColorController@unPublishedColorInfo');

Route::get('/size-info', 'SizeController@sizeInfo');
Route::post('/size/new', 'SizeController@saveSizeInfo');
Route::get('/edit-size-info/{id}', 'SizeController@editSizeInfo');
Route::post('/size/update', 'SizeController@updateSizeInfo');
Route::get('/size/published/{id}', 'SizeController@PublishedSizeInfo');
Route::get('/size/unpublished/{id}', 'SizeController@unPublishedSizeInfo');

Route::get('/unit-info', 'UnitController@unitInfo');
Route::post('/unit/new', 'UnitController@saveUnitInfo');
Route::get('/edit-unit-info/{id}', 'UnitController@editUnitInfo');
Route::post('/unit/update', 'UnitController@updateUnitInfo');
Route::get('/unit/published/{id}', 'UnitController@PublishedUnitInfo');
Route::get('/unit/unpublished/{id}', 'UnitController@unPublishedUnitInfo');

Route::get('/item-info', 'ItemController@ItemInfo');
Route::get('/add-item-info', 'ItemController@addItemInfo');
Route::post('/itme/new', 'ItemController@saveItemInfo');

Route::get('/supplier-info', 'SupplierController@supplierInfo');



