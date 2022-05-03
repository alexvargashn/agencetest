<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoOsEmail
 *
 * @property $co_email
 * @property $co_os
 * @property $email
 * @property $senha
 * @property $nome
 * @property $co_cliente
 * @property $ativo
 * @property $ddd
 * @property $tel
 * @property $cargo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoOsEmail extends Model
{
    
    static $rules = [
		'co_email' => 'required',
		'nome' => 'required',
		'co_cliente' => 'required',
		'ativo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_email','co_os','email','senha','nome','co_cliente','ativo','ddd','tel','cargo'];



}
