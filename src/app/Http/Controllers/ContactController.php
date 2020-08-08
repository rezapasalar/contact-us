<?php

namespace ContactUs\app\Http\Controllers;

use ContactUs\app\Http\Model\Contact;
use Illuminate\Http\Request;
use Flash;

class ContactController extends Controller
{
    public function index()
    {
        return [
            "route" => "contactUsPackage.index",
            "contacts" => Contact::latest()->get(),
        ];
    }

    public function create()
    {
        // return view("contactUsPackage.create");
        // return view("ContactUs::create");

        return "contactUsPackage.create";
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => ["required"],
            "email" => ["required", "email"],
            "subject" => ["required", "min:3"],
            "body" => ["required"]
        ]);

        Contact::create($request->all());

        Flash::success('Send message is successful.');

        return back();
    }
}