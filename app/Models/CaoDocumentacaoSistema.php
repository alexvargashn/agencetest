<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoDocumentacaoSistema
 *
 * @property $id
 * @property $co_sistema
 * @property $descricao
 * @property $pasta
 * @property $sub_grupo
 * @property $co_usuario
 * @property $dt_doc
 * @property $arquivo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoDocumentacaoSistema extends Model
{
    
    static $rules = [
		'co_sistema' => 'required',
		'pasta' => 'required',
		'co_usuario' => 'required',
		'dt_doc' => 'required',
		'arquivo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_sistema','descricao','pasta','sub_grupo','co_usuario','dt_doc','arquivo'];



}
