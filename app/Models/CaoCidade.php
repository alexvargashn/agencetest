<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoCidade
 *
 * @property $co_cidade
 * @property $no_cidade
 * @property $co_uf
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoCidade extends Model
{
    
    static $rules = [
		'co_cidade' => 'required',
		'no_cidade' => 'required',
		'co_uf' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_cidade','no_cidade','co_uf'];



}
