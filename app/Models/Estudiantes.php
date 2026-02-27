<?php

namespace App\Models;
use App\Models\Curso;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    //
    protected $fillable = ['nombre', 'email', 'curso_id'];
    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
