<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //定义模型关联的数据表
    protected $table = 'message';
    //定义主键
    protected $primaryKey = 'message_id';
    //定义禁止操作时间
    public $timestamps = true;
}
