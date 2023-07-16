<?php declare(strict_types=1);

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Inertia\Response;
use Inertia\Inertia;

class TestController extends Controller
{

    /*
    @return Response
    */

        public function index() : Response
        {
            return Inertia::render('Inertia/Index');
        }

        /*
            @param int $id パラメータ
        */
        public function show(int $id)
        {
            // dd($id);
            return Inertia::render('Inertia/Show', 
        [
            'id' => $id,//変数を渡す形bladeで言うところのcompact
        ]);
        }
    
}
