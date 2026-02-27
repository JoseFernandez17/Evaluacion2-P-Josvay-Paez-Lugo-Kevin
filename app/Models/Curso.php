<?php

namespace App\Models;
use App\Models\Estudiantes;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    protected $fillable = ['nombre'];
    protected $primaryKey = 'id';
    public function estudiantes(){
        return $this->hasMany(Estudiantes::class);
    }
}
