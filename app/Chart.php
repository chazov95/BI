<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{

	//у графика может быть только одна компания
    public function company()
    {
        return $this->belongsTo('App\Сompany');
    }


//у графика может быть несколько точек
public function dots()
    {
        return $this->hasMany('App\Dot');
    }
}
