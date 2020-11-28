<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $guarded = [];

    public function uploads()
    {
        return $this->belongsToMany('\App\Upload');
    }
}
