<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $guarded = [];
    // Pastikan field tanggal dikonversi ke Carbon
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
