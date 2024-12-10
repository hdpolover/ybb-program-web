<?php

namespace App\Controllers;

class Announcement extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
