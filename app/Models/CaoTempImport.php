<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoTempImport
 *
 * @property $codigo
 * @property $descricao
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoTempImport extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'descricao' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','descricao'];



}
