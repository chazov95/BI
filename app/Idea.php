<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
  // у нескольких идей может быть один пользователь (обратная связь)
	 public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function company()
    {
        return $this->belongsTo('App\Сompany');
    }
}
