<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutletModel extends Model
{
    use HasFactory;

    protected $table = 'outlet';
    protected $fillable = ['regional_id', 'name', 'address'];

    public function regional()
    {
        return $this->hasOne(RegionalModel::class, 'id', 'regional_id');
    }
}
