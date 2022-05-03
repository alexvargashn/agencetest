<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoUf
 *
 * @property $co_uf
 * @property $ds_uf
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoUf extends Model
{
    
    static $rules = [
		'co_uf' => 'required',
		'ds_uf' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_uf','ds_uf'];



}
