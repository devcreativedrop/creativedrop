<?php

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
    return redirect('/home');
});

Auth::routes();

Route::get('/case_study/{id}', 'WelcomeController@case_study');

Route::get('/admin/home', 'HomeController@index');
Route::get('/admin/page_section_id/{id}', 'BackendController@page_section_id')->name('admin.page_section_id');
Route::get('/services_by_id/{id}', 'WelcomeController@services_by_id')->name('services_by_id');

// Pages
Route::get('/admin/pages', 'BackendController@pages')->name('pages');
Route::post('/admin/edit_page', 'BackendController@edit_page')->name('edit_page');
Route::get('/admin/edit_page_content/{id}', 'BackendController@edit_page_content')->name('edit_page_content');
Route::get('/admin/delete_page/{id}', 'BackendController@delete_page')->name('delete_page');

Route::post('/admin/create_page', 'BackendController@create_page')->name('create_page');

// Main Menu 
Route::get('/admin/menu', 'BackendController@index')->name('menu');
Route::post('/admin/store_main_menu', 'BackendController@store_main_menu')->name('store_main_menu');
Route::post('/admin/edit_main_menu', 'BackendController@edit_main_menu')->name('edit_main_menu');
Route::get('/admin/delete_main_menu/{id}', 'BackendController@delete_main_menu')->name('delete_main_menu');

// Child Menu 
Route::post('/admin/store_child_menu', 'BackendController@store_child_menu')->name('store_child_menu');
Route::post('/admin/edit_child_menu', 'BackendController@edit_child_menu')->name('edit_child_menu');
Route::get('/admin/delete_child_menu/{id}', 'BackendController@delete_child_menu')->name('delete_child_menu');

// Sub Child Menu 
Route::post('/admin/store_sub_child_menu', 'BackendController@store_sub_child_menu')->name('store_sub_child_menu');
Route::post('/admin/edit_sub_child_menu', 'BackendController@edit_sub_child_menu')->name('edit_sub_child_menu');
Route::get('/admin/delete_sub_child_menu/{id}', 'BackendController@delete_sub_child_menu')->name('delete_sub_child_menu');


// Slider Section
Route::post('/admin/store_slider', 'BackendController@store_slider')->name('store_slider');
Route::post('/admin/edit_slider', 'BackendController@edit_slider')->name('edit_slider');
Route::get('/admin/delete_slider/{id}', 'BackendController@delete_slider')->name('delete_slider');


// Video Section
Route::post('/admin/store_video', 'BackendController@store_video')->name('store_video');
Route::post('/admin/edit_video', 'BackendController@edit_video')->name('edit_video');
Route::get('/admin/delete_video/{id}', 'BackendController@delete_video')->name('delete_video');


// Client and Partner Section
Route::post('/admin/store_client_and_partner', 'BackendController@store_client_and_partner')->name('store_client_and_partner');
Route::post('/admin/edit_client_and_partner', 'BackendController@edit_client_and_partner')->name('edit_client_and_partner');
Route::get('/admin/delete_client_and_partner/{id}', 'BackendController@delete_client_and_partner')->name('delete_client_and_partner');


// Industry Section
Route::post('/admin/store_industries', 'BackendController@store_industries')->name('store_industries');
Route::post('/admin/edit_industry', 'BackendController@edit_industry')->name('edit_industry');
Route::get('/admin/delete_industry/{id}', 'BackendController@delete_industry')->name('delete_industry');


// Team Section
Route::post('/admin/store_team', 'BackendController@store_team')->name('store_team');
Route::post('/admin/edit_team', 'BackendController@edit_team')->name('edit_team');
Route::get('/admin/delete_team/{id}', 'BackendController@delete_team')->name('delete_team');


// News and Opinions Section
Route::post('/admin/store_news', 'BackendController@store_news')->name('store_news');
Route::post('/admin/edit_news', 'BackendController@edit_news')->name('edit_news');
Route::get('/admin/delete_news/{id}', 'BackendController@delete_news')->name('delete_news');

// Request Section
Route::post('/admin/store_request', 'BackendController@store_request')->name('store_request');
Route::post('/admin/edit_request', 'BackendController@edit_request')->name('edit_request');
Route::get('/admin/delete_request/{id}', 'BackendController@delete_request')->name('delete_request');


// para_style_1 Section
Route::post('/admin/store_para_style_1', 'BackendController@store_para_style_1')->name('store_para_style_1');
Route::post('/admin/edit_para_style_1', 'BackendController@edit_para_style_1')->name('edit_para_style_1');
Route::get('/admin/delete_para_style_1/{id}', 'BackendController@delete_para_style_1')->name('delete_para_style_1');

// para_style_2 Section
Route::post('/admin/store_para_style_2', 'BackendController@store_para_style_2')->name('store_para_style_2');
Route::post('/admin/edit_para_style_2', 'BackendController@edit_para_style_2')->name('edit_para_style_2');
Route::get('/admin/delete_para_style_2/{id}', 'BackendController@delete_para_style_2')->name('delete_para_style_2');


// para_style_3 Section
Route::post('/admin/store_para_style_3', 'BackendController@store_para_style_3')->name('store_para_style_3');
Route::post('/admin/edit_para_style_3', 'BackendController@edit_para_style_3')->name('edit_para_style_3');
Route::get('/admin/delete_para_style_3/{id}', 'BackendController@delete_para_style_3')->name('delete_para_style_3');

// para_style_4 Section
Route::post('/admin/store_para_style_4', 'BackendController@store_para_style_4')->name('store_para_style_4');
Route::post('/admin/edit_para_style_4', 'BackendController@edit_para_style_4')->name('edit_para_style_4');
Route::get('/admin/delete_para_style_4/{id}', 'BackendController@delete_para_style_4')->name('delete_para_style_4');

// para_style_5 Section
Route::post('/admin/store_para_style_5', 'BackendController@store_para_style_5')->name('store_para_style_5');
Route::post('/admin/edit_para_style_5', 'BackendController@edit_para_style_5')->name('edit_para_style_5');
Route::get('/admin/delete_para_style_5/{id}', 'BackendController@delete_para_style_5')->name('delete_para_style_5');

// Case Study Section
Route::post('/admin/store_case_study', 'BackendController@store_case_study')->name('store_case_study');
Route::post('/admin/edit_case_study', 'BackendController@edit_case_study')->name('edit_case_study');
Route::get('/admin/delete_case_study/{id}', 'BackendController@delete_case_study')->name('delete_case_study');


// Section 15
Route::post('/admin/store_section_15', 'BackendController@store_section_15')->name('store_section_15');
Route::post('/admin/edit_section_15', 'BackendController@edit_section_15')->name('edit_section_15');
Route::get('/admin/delete_section_15/{id}', 'BackendController@delete_section_15')->name('delete_section_15');

// Section 16
Route::post('/admin/store_section_16', 'BackendController@store_section_16')->name('store_section_16');
Route::post('/admin/edit_section_16', 'BackendController@edit_section_16')->name('edit_section_16');
Route::get('/admin/delete_section_16/{id}', 'BackendController@delete_section_16')->name('delete_section_16');

// Section 17
Route::post('/admin/store_section_17', 'BackendController@store_section_17')->name('store_section_17');
Route::post('/admin/edit_section_17', 'BackendController@edit_section_17')->name('edit_section_17');
Route::get('/admin/delete_section_17/{id}', 'BackendController@delete_section_17')->name('delete_section_17');

// Section 18
Route::post('/admin/store_section_18', 'BackendController@store_section_18')->name('store_section_18');
Route::post('/admin/edit_section_18', 'BackendController@edit_section_18')->name('edit_section_18');
Route::get('/admin/delete_section_18/{id}', 'BackendController@delete_section_18')->name('delete_section_18');

// Section 19
Route::post('/admin/store_section_19', 'BackendController@store_section_19')->name('store_section_19');
Route::post('/admin/edit_section_19', 'BackendController@edit_section_19')->name('edit_section_19');
Route::get('/admin/delete_section_19/{id}', 'BackendController@delete_section_19')->name('delete_section_19');



Route::get('/{id}', 'WelcomeController@index')->name('pages');
Route::get('/admin/page_sections', 'BackendController@page_sections')->name('page_sections');




