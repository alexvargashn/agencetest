<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoRelEmailO
 *
 * @property $id
 * @property $co_email
 * @property $co_os
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoRelEmailO extends Model
{
    
    static $rules = [
		'co_email' => 'required',
		'co_os' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_email','co_os'];



}
