<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoArquiteturaO
 *
 * @property $co_arquitetura
 * @property $ds_arquitetura
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoArquiteturaO extends Model
{
    
    static $rules = [
		'co_arquitetura' => 'required',
		'ds_arquitetura' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_arquitetura','ds_arquitetura'];



}
