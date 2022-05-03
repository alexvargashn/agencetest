<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoLogChamado
 *
 * @property $id
 * @property $co_chamado
 * @property $dt_chamado
 * @property $co_usuario
 * @property $co_daily
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoLogChamado extends Model
{
    
    static $rules = [
		'co_chamado' => 'required',
		'dt_chamado' => 'required',
		'co_usuario' => 'required',
		'co_daily' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_chamado','dt_chamado','co_usuario','co_daily'];



}
