<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoTipoSistemaUsuario
 *
 * @property $co_sistema
 * @property $ds_sistema
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoTipoSistemaUsuario extends Model
{
    
    static $rules = [
		'co_sistema' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_sistema','ds_sistema'];



}
