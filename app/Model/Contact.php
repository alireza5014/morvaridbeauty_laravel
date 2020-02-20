<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['id','name','email','message','ip','browser','os'];

    public function getCreatedAtAttribute($value)
    {
        Carbon::setLocale('fa');
        return  Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }

    public function getUpdatedAtAttribute($value)
    {  Carbon::setLocale('fa');

        return  Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }
}
