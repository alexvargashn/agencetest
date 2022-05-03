<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoUsuarioDtDisp
 *
 * @property $co_dt_disp
 * @property $co_usuario
 * @property $dt_disp
 * @property $dt_alt
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoUsuarioDtDisp extends Model
{
    
    static $rules = [
		'co_dt_disp' => 'required',
		'dt_disp' => 'required',
		'dt_alt' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_dt_disp','co_usuario','dt_disp','dt_alt'];



}
