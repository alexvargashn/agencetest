<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoTipoIdiomaUsuario
 *
 * @property $co_idioma
 * @property $ds_idioma
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoTipoIdiomaUsuario extends Model
{
    
    static $rules = [
		'co_idioma' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_idioma','ds_idioma'];



}
