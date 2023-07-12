<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'commentId',
        'reportId',
        'from',
        'text',
        'date'
    ];

    protected $primaryKey = "commentId";
    public $timestamps = false;

}