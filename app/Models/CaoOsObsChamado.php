<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsObsChamado
 *
 * @property $co_obs
 * @property $co_chamado
 * @property $co_usuario
 * @property $descricao
 * @property $dt_obs
 * @property $email
 * @property $arquivo_obs
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoOsObsChamado extends Model
{
    
    static $rules = [
		'co_obs' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_obs','co_chamado','co_usuario','descricao','dt_obs','email','arquivo_obs'];



}
