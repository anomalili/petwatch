<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationData extends Model
{
    use HasFactory;

    protected $fillable = [
        'locationDataId',
        'zip',
        'city',
        'gps_width',
        'gps_lenght'
    ];

    protected $primaryKey = "locationDataId";
    public $timestamps = false;

    public function bejelentesek()
    {
        return $this->hasMany(Report::class);
    }
}