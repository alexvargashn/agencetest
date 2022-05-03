<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PasswordReset
 *
 * @property $email
 * @property $token
 * @property $created_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PasswordReset extends Model
{
    
    static $rules = [
		'email' => 'required',
		'token' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['email','token'];



}
