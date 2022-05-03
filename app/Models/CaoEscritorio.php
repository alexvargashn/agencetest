<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoEscritorio
 *
 * @property $co_escritorio
 * @property $local
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoEscritorio extends Model
{
    
    static $rules = [
		'co_escritorio' => 'required',
		'local' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_escritorio','local'];



}
