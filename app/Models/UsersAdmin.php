<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\Authenticatable;

class UsersAdmin extends \Illuminate\Foundation\Auth\User implements JWTSubject, Authenticatable
{
    //定义模型关联的数据表
    protected $table = 'users_admin';
    //定义主键
    protected $primaryKey = 'id';
    //定义禁止操作时间
    public $timestamps = true;
    
    protected $rememberTokenName = NULL;

    protected $guarded = [];

    protected $hidden = [
        'password',
    ];

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getJWTIdentifier()
    {
        return self::getKey();
    }
}
