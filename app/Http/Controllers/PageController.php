<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('page.index');
    }
}
