<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\MoviesService;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    private $moviesService;

    public function __construct(MoviesService $moviesService)
    {
        $this->moviesService = $moviesService;
    }

    public function getAll(Request $request)
    {
        return $this->moviesService->getAll($request);
    }
}
