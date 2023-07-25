<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TodoController extends Controller
{
    /**
     * @param string
     */

     public function index() {
        return Inertia::render('Todo/Index');
     }
}
