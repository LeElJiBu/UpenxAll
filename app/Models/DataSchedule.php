<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSchedule extends Model
{
    use HasFactory;

    protected $table = 'data_schedules';

    protected $fillable = ['fecha', 'lugar', 'descripcion'];
}
