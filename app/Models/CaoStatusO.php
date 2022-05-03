<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoStatusO
 *
 * @property $co_status_atual
 * @property $ds_status
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoStatusO extends Model
{
    
    static $rules = [
		'co_status_atual' => 'required',
		'ds_status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_status_atual','ds_status'];



}
