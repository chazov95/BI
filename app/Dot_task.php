<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dot_task extends Model
{
    //у каждой задачи лишь одна точка
     public function dot()
    {
        return $this->belongsTo('App\Dot');
    }

    //у задачи всегда только одна компания
     public function company()
    {
        return $this->belongsTo('App\Company');
    }

    // у задачи может быть только один ответственны
    public function autor()
    {
        return $this->belongsTo('App\User');
    }
    // у задачи только один постановщик
    public function responsible()
    {
        return $this->belongsTo('App\User');
    }
}
