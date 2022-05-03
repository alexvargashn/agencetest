<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoPermissaoHoraExtra
 *
 * @property $id_permissao
 * @property $co_movimento
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoPermissaoHoraExtra extends Model
{
    
    static $rules = [
		'id_permissao' => 'required',
		'co_movimento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_permissao','co_movimento'];



}
