<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
  
    protected $table = 'blogs';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'tags',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'status',
        'created_by',
    ];

   protected $casts = [
    'tags' => 'array', // Automatically converts JSON to array
];

}
