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
    
}
