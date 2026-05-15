<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::index')->name('index');

Route::livewire('/posts/{post}', 'pages::post')->name('post');
