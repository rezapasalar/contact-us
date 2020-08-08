<?php

use Illuminate\Support\Facades\Route;

Route::namespace("\ContactUs\app\Http\Controllers")->group(function () {
    // Route::get("/contact", "ContactController@create")->name("contact.create");
    Route::post("/contact", "ContactController@store")->name("contact.store");
    // Route::get("/contacts", "ContactController@index")->name("contacts");
});