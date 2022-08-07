<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailReleaseModel extends Model
{
    use HasFactory;

    protected $table = 'detail_release';
    protected $fillable = ['header_release_id', 'produk_id', 'purchase_price', 'selling_price', 'qty'];
}
