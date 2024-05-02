<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory, HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'movies';

    protected $fillable = [
        'title',
        'release_year',
        'locations',
        'fun_facts',
        'production_company',
        'distributor',
        'director',
        'writer',
        'actor_1',
        'actor_2',
        'actor_3',
        'sf_find_neighborhoods',
        'analysis_neighborhoods',
        'current_supervisor_districts',
    ];
}
