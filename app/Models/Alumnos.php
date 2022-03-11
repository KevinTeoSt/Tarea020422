<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $foreign = 'categoria_id';
    protected $table = 'alumnos';
    protected $fillable = [
        'Carnet',
        'FirstName',
        'SecondName',
        'LastName',
        'DateOfBirth',
        'Address',
        'Email',
        'Dpi',
        'Cel',
        'categoria_id'
        ];
    public function alumno(){
        return $this->bolongsTo('App\Model\Categorias', 'categoria_id', 'categoria_id');
    }
}
