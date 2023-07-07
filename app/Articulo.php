<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Articulo extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['description', 'price', 'stock', 'deleted_at'];
}
