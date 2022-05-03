<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoHelpAutor
 *
 * @property $co_autor
 * @property $no_autor
 * @property $co_filial
 * @property $nu_ddd1
 * @property $nu_tel1
 * @property $nu_ramal1
 * @property $nu_ddd2
 * @property $nu_tel2
 * @property $nu_ramal2
 * @property $ds_email
 * @property $ds_funcao
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoHelpAutor extends Model
{
    
    static $rules = [
		'co_autor' => 'required',
		'no_autor' => 'required',
		'co_filial' => 'required',
		'ds_funcao' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_autor','no_autor','co_filial','nu_ddd1','nu_tel1','nu_ramal1','nu_ddd2','nu_tel2','nu_ramal2','ds_email','ds_funcao'];



}
