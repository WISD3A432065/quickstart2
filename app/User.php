<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // 其他的 Eloquent 屬性...

    /**
     * 取得該使用者的所有任務。
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}