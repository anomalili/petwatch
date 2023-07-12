<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'animalState',
        'reportState',
        'locationDataId',
        'user',
        'imgUrl',
        'species',
        'breed',
        'sex',
        'fixed',
        'birthDate',
        'color',
        'size',
        'body',
        'chip',
        'description',
    ];

    protected $primaryKey = "reportId";
    public $timestamps = false;

    public function helyadatok()
{
    return $this->belongsTo(LocationData::class);
}
}