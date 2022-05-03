<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoTipoConhecimentoUsuario
 *
 * @property $co_conhecimento
 * @property $ds_conhecimento
 * @property $co_sistema
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoTipoConhecimentoUsuario extends Model
{
    
    static $rules = [
		'co_conhecimento' => 'required',
		'co_sistema' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_conhecimento','ds_conhecimento','co_sistema'];



}
