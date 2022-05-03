<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoAviso
 *
 * @property $co_aviso
 * @property $ds_aviso
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoAviso extends Model
{
    
    static $rules = [
		'co_aviso' => 'required',
		'ds_aviso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_aviso','ds_aviso'];



}
