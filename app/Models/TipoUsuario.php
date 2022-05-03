<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoUsuario
 *
 * @property $co_tipo_usuario
 * @property $ds_tipo_usuario
 * @property $co_sistema
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoUsuario extends Model
{
    
    static $rules = [
		'co_tipo_usuario' => 'required',
		'ds_tipo_usuario' => 'required',
		'co_sistema' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_tipo_usuario','ds_tipo_usuario','co_sistema'];



}
