<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use App\Models\Todo;
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

     public function store(Request $request) {

        $request->validate([
            'name' => 'required | max:20',
            'detail' => 'required',
        ]);

        $todo = new Todo;
        $todo->name = $request->name;
        $todo->detail = $request->detail;
        $todo->save();

        return redirect()->route('todo.index')->with([
            'message' => '登録しました',
        ]);
     }
}
