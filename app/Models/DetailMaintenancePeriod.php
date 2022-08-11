<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMaintenancePeriod extends Model
{
    use HasFactory;

    protected $table = 'detail_maintenance_periods';
    protected $fillable = ['maintenance_period_id', 'task_name', 'task_duration', 'due_date', 'notes', 'status'];
}
