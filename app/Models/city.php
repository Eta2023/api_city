<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;
    protected $fillable = ['city_name_ar', 'city_name_en', 'country_id'];
    protected $primaryKey = 'city_id';

    public function country()
    {
        return $this->belongsTo(country::class);
    }
    public function neighborhood()
    {
        return $this->hasMany(neighborhoods::class, 'city_id');
    }
}
