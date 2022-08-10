<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name'
    ];

    protected $table = 'marital_statuses';

    protected $casts = [
        'marital_status_id' => 'integer',
    ];
}
