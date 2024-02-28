<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class neighborhoods extends Model
{
    use HasFactory;
    protected $primaryKey = 'neighborhood_id';

    protected $fillable = ['neighborhood_name_ar', 'neighborhood_name_en', 'city_id'];

    public function city()
    {
        return $this->belongsTo(city::class);
    }
}
