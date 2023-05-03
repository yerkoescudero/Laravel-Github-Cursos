<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $table = "users"; para administrar bajo un modelo otra tabla

    //protected $fillable = ['name,', 'descripcion', 'categoria'];

    protected $guarded = ['status'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
