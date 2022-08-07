<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalModel extends Model
{
    use HasFactory;

    public static function currency_format($nominal = 0)
    {
        $nominal = 'Rp ' . number_format($nominal, 0, ',', '.');
        return $nominal;
    }
}
