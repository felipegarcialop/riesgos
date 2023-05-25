<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grupo
 *
 * @property $id
 * @property $Grupos
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grupo extends Model
{
    
    static $rules = [
		'Grupos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Grupos'];



}
