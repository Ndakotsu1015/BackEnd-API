<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable =
    ['title', 'body', 'author', 'marital_status_id'];

    protected $table = 'articles';

    public function maritalStatus(){
        return $this->belongsTo(MaritalStatus::class);
    }
}
