<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostCheckController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {
        return response()->json([
            'date' => [
                'year' => 2022,
                'month' => 4,
                'day' => 6,
            ],
            'title' => 'test response!',
            'level' => 'high',
            'isLogin' => false
        ],
            200
        );
    }
}
