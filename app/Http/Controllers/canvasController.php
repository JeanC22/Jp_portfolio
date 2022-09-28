<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class canvasController extends Controller
{
    public function index()
    {
        return view('canvas.canvas');
    }
}
