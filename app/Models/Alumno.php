<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $Carnet
 * @property $categoria_id
 * @property $FirstName
 * @property $SecondName
 * @property $LastName
 * @property $DateOfBirth
 * @property $Address
 * @property $Email
 * @property $Dpi
 * @property $Cel
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{

    static $rules = [
		'Carnet' => 'required',
		'categoria_id' => 'required',
		'FirstName' => 'required',
		'SecondName' => 'required',
		'LastName' => 'required',
		'DateOfBirth' => 'required',
		'Address' => 'required',
		'Email' => 'required',
		'Dpi' => 'required',
		'Cel' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Carnet','categoria_id','FirstName','SecondName','LastName','DateOfBirth','Address','Email','Dpi','Cel'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }


}
