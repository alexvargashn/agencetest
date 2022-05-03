<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoPontosConhecimento
 *
 * @property $idpontos
 * @property $pontuacao
 * @property $co_coordenador
 * @property $idconhecimento
 *
 * @property CaoConhecimento $caoConhecimento
 * @property CaoEscalaRanking $caoEscalaRanking
 * @property CaoUsuario $caoUsuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoPontosConhecimento extends Model
{
    
    static $rules = [
		'idpontos' => 'required',
		'pontuacao' => 'required',
		'co_coordenador' => 'required',
		'idconhecimento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idpontos','pontuacao','co_coordenador','idconhecimento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caoConhecimento()
    {
        return $this->hasOne('App\Models\CaoConhecimento', 'idconhecimento', 'idconhecimento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caoEscalaRanking()
    {
        return $this->hasOne('App\Models\CaoEscalaRanking', 'idescala', 'pontuacao');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caoUsuario()
    {
        return $this->hasOne('App\Models\CaoUsuario', 'co_usuario', 'co_coordenador');
    }
    

}
