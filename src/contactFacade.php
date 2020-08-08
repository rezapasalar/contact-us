<?php

namespace ContactUs;

use Illuminate\Support\Facades\Facade;

class ContactFacade extends Facade
{
    static protected function getFacadeAccessor()
    {
        return "ContactUs";
    }
}