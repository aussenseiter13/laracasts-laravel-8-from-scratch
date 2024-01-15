<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'excerpt',
        'body'
    ];

    /*
        If we want to modify a model to always use a specific
        field for route model binding edit the method below
    */

    public function getRouteKeyName()
    {
        // DEFAULT
        return parent::getRouteKeyName();

        // Default Route Model binding using slug
        // return 'slug';
    }
}