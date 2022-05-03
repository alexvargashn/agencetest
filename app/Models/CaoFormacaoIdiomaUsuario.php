<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoFormacaoIdiomaUsuario
 *
 * @property $co_usuario
 * @property $co_idioma
 * @property $nv_leitura
 * @property $nv_escrita
 * @property $nv_fala
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoFormacaoIdiomaUsuario extends Model
{
    
    static $rules = [
		'co_usuario' => 'required',
		'co_idioma' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_usuario','co_idioma','nv_leitura','nv_escrita','nv_fala'];



}
