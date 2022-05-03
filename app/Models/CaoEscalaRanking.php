<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoEscalaRanking
 *
 * @property $idescala
 * @property $qtd_visual
 * @property $pontuacao
 *
 * @property CaoPontosConhecimento[] $caoPontosConhecimentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoEscalaRanking extends Model
{
    
    static $rules = [
		'idescala' => 'required',
		'qtd_visual' => 'required',
		'pontuacao' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idescala','qtd_visual','pontuacao'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caoPontosConhecimentos()
    {
        return $this->hasMany('App\Models\CaoPontosConhecimento', 'pontuacao', 'idescala');
    }
    

}
