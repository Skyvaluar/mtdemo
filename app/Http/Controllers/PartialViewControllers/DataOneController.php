<?php

namespace App\Http\Controllers\PartialViewControllers;

use App\Http\Controllers\Controller;

class DataOneController extends Controller
{
    public function index()
    {
        return view('partials.data-tab-one');
    }
}
