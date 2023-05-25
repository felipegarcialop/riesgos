<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recurso
 *
 * @property $id
 * @property $Nombre
 * @property $Objetivo
 * @property $Descripcion
 * @property $id_tema
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recurso extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Objetivo' => 'required',
		'Descripcion' => 'required',
		'id_tema' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Objetivo','Descripcion','id_tema'];



}
