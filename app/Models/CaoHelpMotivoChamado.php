<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHelpMotivoChamado
 *
 * @property $co_motivo
 * @property $ds_motivo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoHelpMotivoChamado extends Model
{
    
    static $rules = [
		'co_motivo' => 'required',
		'ds_motivo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_motivo','ds_motivo'];



}
