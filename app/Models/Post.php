<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Evite l'erreur mass assignment ( indique les champs attendues au model)
    protected $fillable = ['title', 'content'];
}
