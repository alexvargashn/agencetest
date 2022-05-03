<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoDocumentacaoOutro
 *
 * @property $id
 * @property $nome
 * @property $co_sistema
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoDocumentacaoOutro extends Model
{
    
    static $rules = [
		'nome' => 'required',
		'co_sistema' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','co_sistema'];



}
