<?php

declare(strict_types=1);

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\InertiaTest;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;

class TestController extends Controller
{
    public function test()
    {
        return Inertia::render('InertiaTest');
    }

    /*
    @return Response
    */

    public function index(): Response
    {
        return Inertia::render('Inertia/Index');
    }

    public function create()
    {
        return Inertia::render('Inertia/Create');
    }

    /*
            @param int $id パラメータ
        */
    public function show(int $id)
    {
        // dd($id);
        return Inertia::render(
            'Inertia/Show',
            [
                'id' => $id, //変数を渡す形bladeで言うところのcompact
            ]
        );
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required | max:20',
            'contents' => 'required',
        ]);

        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $request->title;
        $inertiaTest->contents = $request->contents;
        $inertiaTest->save();

        return redirect()->route('inertia.index')->with(
            [
                'message' => '登録しました',
            ]);
    }
}
