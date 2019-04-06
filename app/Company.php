<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{


//у компании может быть много пользователей
public function users()
    {
        return $this->belongsToMany('App\User', 'companies_users');
    }

//у компании может быть много идей
public function ideas()
    {
        return $this->hasMany('App\Idea');
    }

//у компании множество точек
public function dots()
    {
        return $this->hasMany('App\Idea');
    }

// у компании может быть много таблиц
    public function charts()
    {
        return $this->hasMany('App\Chart');
    }
//у компании может быть много задач
     public function dots_tasks()
    {
        return $this->hasMany('App\Dot_task');
    }
}
