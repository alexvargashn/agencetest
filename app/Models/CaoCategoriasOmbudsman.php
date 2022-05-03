<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoCategoriasOmbudsman
 *
 * @property $idcategoria
 * @property $descricao
 *
 * @property CaoOmbudsman[] $caoOmbudsmen
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoCategoriasOmbudsman extends Model
{
    
    static $rules = [
		'idcategoria' => 'required',
		'descricao' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idcategoria','descricao'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caoOmbudsmen()
    {
        return $this->hasMany('App\Models\CaoOmbudsman', 'idcategoria', 'idcategoria');
    }
    

}
