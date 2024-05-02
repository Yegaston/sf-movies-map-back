<?php

namespace App\Services;

use App\Models\Movies;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * Class MoviesService.
 */
class MoviesService
{
    public function getAll(): Collection
    {
        return QueryBuilder::for(Movies::class)
            ->allowedFilters('title', 'distributor', 'release_year')
            ->get();
    }
}
