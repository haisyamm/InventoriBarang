<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionalModel extends Model
{
    use HasFactory;

    protected $table = 'regional';
    protected $fillable = ['name', 'regional', 'address'];
}
