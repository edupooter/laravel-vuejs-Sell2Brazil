<?php

Route::group(
    [
        'prefix' => 'v1',
        'as' => 'api.',
        'namespace' => 'Api\V1\Admin',
        'middleware' => ['auth:sanctum']
    ],
    function () {
        Route::apiResource('abilities', 'AbilitiesController', ['only' => ['index']]);

        Route::get('locales/languages', 'LocalesController@languages')->name('locales.languages');
        Route::get('locales/messages', 'LocalesController@messages')->name('locales.messages');

        Route::resource('permissions', 'PermissionsApiController');

        Route::resource('roles', 'RolesApiController');

        Route::resource('users', 'UsersApiController');

        Route::resource('contact-companies', 'ContactCompanyApiController');

        Route::resource('contact-contacts', 'ContactContactsApiController');
    }
);
