<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoAcompanhamentoSistema
 *
 * @property $co_acompanhamento
 * @property $email
 * @property $senha
 * @property $co_sistema
 * @property $status
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoAcompanhamentoSistema extends Model
{
    
    static $rules = [
		'co_acompanhamento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_acompanhamento','email','senha','co_sistema','status'];



}
