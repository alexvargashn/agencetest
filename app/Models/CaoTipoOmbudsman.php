<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CaoTipoOmbudsman
 *
 * @property $idtipo
 * @property $descricao
 *
 * @property CaoOmbudsman[] $caoOmbudsmen
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CaoTipoOmbudsman extends Model
{
    
    static $rules = [
		'idtipo' => 'required',
		'descricao' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idtipo','descricao'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caoOmbudsmen()
    {
        return $this->hasMany('App\Models\CaoOmbudsman', 'idtipo', 'idtipo');
    }
    

}
