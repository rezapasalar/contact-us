<?php

namespace ContactUs\app\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        "name",
        "email",
        "subject",
        "body"
    ];
}