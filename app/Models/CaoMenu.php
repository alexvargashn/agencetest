<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoMenu
 *
 * @property $co_menu
 * @property $ds_menu
 * @property $ds_pagina
 * @property $ds_imagem
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoMenu extends Model
{
    
    static $rules = [
		'co_menu' => 'required',
		'ds_menu' => 'required',
		'ds_pagina' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_menu','ds_menu','ds_pagina','ds_imagem'];



}
