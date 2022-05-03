<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoStatusCliente
 *
 * @property $co_status
 * @property $ds_status
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoStatusCliente extends Model
{
    
    static $rules = [
		'co_status' => 'required',
		'ds_status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_status','ds_status'];



}
