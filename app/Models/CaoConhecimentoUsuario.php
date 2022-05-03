<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoConhecimentoUsuario
 *
 * @property $co_usuario
 * @property $co_conhecimento
 * @property $nv_conhecimento
 * @property $is_certificado
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoConhecimentoUsuario extends Model
{
    
    static $rules = [
		'co_usuario' => 'required',
		'co_conhecimento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_usuario','co_conhecimento','nv_conhecimento','is_certificado'];



}
