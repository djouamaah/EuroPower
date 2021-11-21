<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->get('/users', 'UserController@grid')->name('users');
    $router->get('/accounting', 'AccountingController@grid')->name('accounting');
    $router->get('/items', 'ItemsController@grid')->name('items');
    $router->get('/archive', 'ArchiveController@grid')->name('archive');
    $router->get('/messages', 'MessagesController@grid')->name('messages');
    $router->get('/settings', 'SettingsController@grid')->name('settings');


});
