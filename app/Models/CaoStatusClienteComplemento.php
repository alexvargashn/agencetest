<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoStatusClienteComplemento
 *
 * @property $co_complemento_status
 * @property $ds_status
 * @property $co_status
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoStatusClienteComplemento extends Model
{
    
    static $rules = [
		'co_complemento_status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_complemento_status','ds_status','co_status'];



}
