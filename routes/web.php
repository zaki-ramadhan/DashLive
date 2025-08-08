<?php

use App\Livewire\Home;
use App\Livewire\Users;
use App\Livewire\AboutUs;
use App\Livewire\Contact;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('/',  Home::class);
Route::get('/counter', Counter::class);
Route::get('/users', Users::class);
Route::get('/about-us', AboutUs::class);
Route::get('/contact', Contact::class);
