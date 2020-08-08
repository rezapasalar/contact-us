<?php

namespace ContactUs;

class Contact
{
    public function createForm()
    {
        return (new \ContactUs\app\Http\Controllers\ContactController())->create();
    }

    public function contacts()
    {
        return (new \ContactUs\app\Http\Controllers\ContactController())->index();
    }
}