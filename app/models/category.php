<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    protected $primakey = 'cate_id';
    protected $guarded = [];
}
