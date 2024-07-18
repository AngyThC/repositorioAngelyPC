<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table = 'persona';
    protected $fillable = ['nombre', 'edad'];

    public function setTitleAttribute($value)
    {
        $this->attributes['nombre'] = strtoupper($value);
    }

    public function getDescriptionAttribute($value){
        return ucfirst($value);
    }

}
