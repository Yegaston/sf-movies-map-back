<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MovieTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_get_all_movies(): void
    {
        $moviesService = new \App\Services\MoviesService();
        $movies = $moviesService->getAll();

        $this->assertIsArray($movies);
    }
}
