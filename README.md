# contact-us

This package is for the contact section for each website.

Add Provide: # ContactServiceProvider::class,

Add Facade: # 'ContactUs' => ContactFacade::class

Command: # php artisan vendor:publish
Command: # php artisan migrate

Tip: # You must have your database name in the .env file. You have registered.

Using:
```
Route::get("/contact", function () {
    $contctUsForm = \ContactUs::createForm();
    return view("contact.create", compact("contctUsForm"));
})->name("contact.create");

Route::get("/contacts", function () {
    $res = \ContactUs::contacts();
    return view("contact.index", [
        "route" => $res["route"],
        "contacts" => $res["contacts"]
    ]);
});

Route::namespace("\ContactUs\app\Http\Controllers")->group(function () {
    Route::post("/contact", "ContactController@store")->name("contact.store");
});
```
