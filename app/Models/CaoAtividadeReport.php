<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoAtividadeReport
 *
 * @property $id
 * @property $co_cliente
 * @property $inicio
 * @property $fim
 * @property $lembrete
 * @property $co_atividade
 * @property $co_os
 * @property $assunto
 * @property $conteudo
 * @property $status
 * @property $tempo
 * @property $co_usuario
 * @property $data_ativ
 * @property $retorno
 * @property $co_fase
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoAtividadeReport extends Model
{
    
    static $rules = [
		'co_cliente' => 'required',
		'co_atividade' => 'required',
		'co_os' => 'required',
		'status' => 'required',
		'co_usuario' => 'required',
		'data_ativ' => 'required',
		'retorno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['co_cliente','inicio','fim','lembrete','co_atividade','co_os','assunto','conteudo','status','tempo','co_usuario','data_ativ','retorno','co_fase'];



}
