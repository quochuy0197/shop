<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products'; 
    protected $primaryKey = 'pro_id';
    protected $guarded = [];
}
