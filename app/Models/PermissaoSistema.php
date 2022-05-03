<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PermissaoSistema
 *
 * @property $co_usuario
 * @property $co_tipo_usuario
 * @property $co_sistema
 * @property $in_ativo
 * @property $co_usuario_atualizacao
 * @property $dt_atualizacao
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PermissaoSistema extends Model
{
    
    static $rules = [
		'co_usuario' => 'required',
		'co_tipo_usuario' => 'required',
		'co_sistema' => 'required',
		'in_ativo' => 'required',
		'dt_atualizacao' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_usuario','co_tipo_usuario','co_sistema','in_ativo','co_usuario_atualizacao','dt_atualizacao'];



}
