<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoRamo
 *
 * @property $co_ramo
 * @property $ds_ramo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoRamo extends Model
{
    
    static $rules = [
		'co_ramo' => 'required',
		'ds_ramo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_ramo','ds_ramo'];



}
