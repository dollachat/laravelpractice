<?php

Route::get('/', 'WelcomeController@index');


Route::resource('events', 'EventsController');