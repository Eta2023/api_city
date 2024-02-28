<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
    protected $primaryKey = 'country_id';

    protected $fillable = ['country_name_ar', 'country_name_en', 'country_dial_code'];
    public function cities()
    {
        return $this->hasMany(City::class, 'country_id');
    }
    
}
