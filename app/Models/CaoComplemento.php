<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoComplemento
 *
 * @property $co_complemento
 * @property $ds_complemento
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoComplemento extends Model
{
    
    static $rules = [
		'co_complemento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_complemento','ds_complemento'];



}
