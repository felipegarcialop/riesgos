<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apoyo
 *
 * @property $id
 * @property $Nombre
 * @property $Descripcion
 * @property $Direccion
 * @property $Telefono
 * @property $Correo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Apoyo extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Descripcion' => 'required',
		'Direccion' => 'required',
		'Telefono' => 'required',
		'Correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Descripcion','Direccion','Telefono','Correo'];



}
